<div class="grid grid-cols-12 gap-8">
    <div class="col-span-12">
        <x-customer.cards.call-to-action
            timer="30"
            title="75% OFF! Get Your Annual Premium Package Now"
            button-text="I Want My Premium Package!" />
    </div>

    <div class="col-span-12 lg:col-span-7">
        <x-customer.cards.card class="overflow-hidden">
            <div class="flex relative">
                <div class="basis-full">
                    <x-customer.h1 text="H1 orem ipsum dolor sit amet, consectetur!" />
                    <x-customer.h2 text="H2 orem ipsum dolor sit amet, consectetur!" />
                    <x-customer.p muted size="lg">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus illum, culpa possimus
                        similique voluptate adipisci ad illo mollitia ut laboriosam.
                    </x-customer.p>
                    <x-customer.p muted size="lg">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus illum, culpa possimus
                        similique voluptate adipisci ad illo mollitia ut laboriosam.
                    </x-customer.p>
                    <div class="flex gap-4 mt-5">
                        <x-customer.buttons.btn text="Lorem dolor now!" prepend-icon="arrow-left" />

                        <x-customer.buttons.btn text="Lorem dolor now!" append-icon="arrow-right" outlined />
                    </div>
                </div>
            </div>
        </x-customer.cards.card>
    </div>

    <div class="col-span-12 lg:col-span-5 grid grid-cols-2 gap-8">
        <x-customer.cards.card class="col-span-2 md:col-span-1 lg:col-span-2">
            <x-customer.h3 text="H3 orem ipsum dolor sit amet, consectetur!" />
            <x-customer.p muted>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus illum, culpa possimus
                similique voluptate adipisci ad illo mollitia ut laboriosam.
            </x-customer.p>
        </x-customer.cards.card>

        <x-customer.cards.card class="col-span-2 md:col-span-1 lg:col-span-2">
            <x-customer.h4 text="H4 orem ipsum dolor sit amet, consectetur!" />
            <x-customer.p muted>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus illum, culpa possimus
                similique voluptate adipisci ad illo mollitia ut laboriosam.
            </x-customer.p>
        </x-customer.cards.card>
    </div>

</div>
