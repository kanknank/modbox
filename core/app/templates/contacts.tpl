{extends 'base.tpl'}

{block 'main'}
    {$scss[] = 'templates/contacts' nocache}

    <main class="pg-contacts | section container">
        <div class="pg-contacts__columns">
            <div>
                <div class="pg-contacts__contacts | vstack">
                    <div class="_soc">
                        {include 'parts/contact' type='soc'}
                    </div>
                    <div class="">
                        {include 'parts/contact' type='phone' icon=true}
                    </div>
                    <div class="">
                        {include 'parts/contact' type='addr' icon=true}
                    </div>
                    <div class="">
                        {include 'parts/contact' type='email' icon=true}
                    </div>
                </div>
                {* <div class="content">
                    {'content'|resource|modx}
                </div> *}
            </div>

            <div>
                <div class="ya-map" data-map='{3|field:'contacts_map'}'></div>
            </div>
        </div>
    </main>
{/block}
