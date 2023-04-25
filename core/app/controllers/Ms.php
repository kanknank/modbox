<?php
namespace App\Controllers;
use Zoomx\Controllers;

class Ms extends \Zoomx\Controllers\Controller
{

    public function cart_get()
    {
        zoomx()->autoloadResource(false);
        
        $ms2 = $this->modx->getService('minishop2');
        $ms2->initialize($this->modx->context->key ?? 'web');

        $out = [];
        $out['status'] = $ms2->cart->status();
        $out['items'] = $ms2->cart->get();

        foreach($out['items'] as $k => $item) {
            $out['items'][$k] = array_merge($item, $this->modx->getObject('msProduct', $item['id'])->toArray());
        }

        return jsonx($out);
    }


    public function cart_repeat($id)
    {
        zoomx()->autoloadResource(false);
        
        $q = $this->modx->newQuery('msOrderProduct');
        $q->select([
            'msProduct.id',
            'msOrderProduct.count',
        ]);
        $q->where([
            'msOrder.user_id' => $this->modx->user->id,
            'msOrder.id' => $id,
        ]);
        $q->leftJoin('msOrder', 'msOrder', 'msOrder.id = msOrderProduct.order_id');
        $q->leftJoin('msProduct', 'msProduct', 'msProduct.id = msOrderProduct.product_id');
        $q->prepare();
        $q->stmt->execute();
        $q_result = $q->stmt->fetchAll(\PDO::FETCH_ASSOC);

        if (!empty($q_result)) {
            $ms2 = $this->modx->getService('minishop2');
            $ms2->initialize($this->modx->context->key ?? 'web');
            $cart = $ms2->cart->get();
    
            foreach ($q_result as $item) {
                $response = $ms2->cart->add($item['id'], $item['count']);
            }
        }

        $this->modx->sendRedirect('checkout');
    }

}
