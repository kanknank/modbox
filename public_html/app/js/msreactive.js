document.addEventListener('alpine:init', () => {

    Alpine.store('cart', {
        status: { },
        items: { },
        loaded: false,

        init() {
            document.body.classList.add('msr-loading');
            this.get();

            window.addEventListener('load', () => {
                for (let action of ['add', 'change', 'remove']) {
                    miniShop2.Callbacks.add(`Cart.${action}.response.success`, 'alpine-cart', (resp) => this.get());
                    miniShop2.Callbacks.add(`Cart.${action}.response.error`, 'alpine-cart', (resp) => this.get());
                }
            });
        },

        async get() {
            try {
                const response = await fetch('/api/ms/cart/get');
                const { data: { status, items } } = await response.json();

                this.status = status;
                this.items = items;
                this.loaded = true;
            } catch (e) {
                alert(e);
                console.log(e);
            } finally {
                document.body.classList.remove('msr-loading');
            }
        }
    })

    Alpine.data('msReactive', () => ({
        cart: Alpine.store('cart'),

        getItem(idOrKey) {
            for (let i in this.cart.items) {
                if (this.cart.items[i].key == idOrKey || this.cart.items[i].id == idOrKey) {
                    return this.cart.items[i];
                }
            }
            return false;
        },

        cartAdd(id) {
            document.body.classList.add('msr-loading');

            const data = new FormData();
            data.append('action', 'cart/add');
            data.append('id', id);
            data.append('count', 1);
            miniShop2.Cart.add(data);
        },

        cartChange(idOrKey, n) {
            document.body.classList.add('msr-loading');

            const item = this.getItem(idOrKey);
            if (!item) alert('error');

            const qty = +item.count + n;

            const data = new FormData();
            data.append('key', item.key)

            if (!n || !qty) {
                data.append('action', 'cart/remove');
                miniShop2.Cart.remove(data);
            }else {
                data.append('action', 'cart/change');
                data.append('count', qty)
                miniShop2.Cart.change(data);
            }
        },

        getQty(idOrKey) {
            const item = this.getItem(idOrKey);
            return item ? item.count : 0;
        },

        priceFormat(price) {
            return new Intl.NumberFormat('ru-RU', { style: 'currency', currency: 'RUB' }).format(price)
                .replace(',00', '');
        }
    }))
})