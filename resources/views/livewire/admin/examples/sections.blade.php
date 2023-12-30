<x-admin.layout.page
    icon="grid-fill"
    title="Sections"
    subtitle="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique a temporibus.">

    <div class="grid grid-cols-12 gap-8">

        <x-admin.section
            class="col-span-12"
            title="Section with title, subtitle and content"
            subtitle="Quibusdam officiis reprehenderit fugiat dolor blanditiis">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, hic autem in quia porro harum
                asperiores
                reiciendis nostrum dolorem quibusdam officiis reprehenderit fugiat dolor blanditiis nisi tempore dicta
                repudiandae? Perferendis.
            </p>
        </x-admin.section>

        <x-admin.section
            class="col-span-6"
            title="Section only title and content"
            subtitle="Quibusdam officiis reprehenderit fugiat dolor blanditiis">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, hic autem in quia porro harum
                asperiores
                reiciendis nostrum dolorem quibusdam officiis reprehenderit fugiat dolor blanditiis nisi tempore dicta
                repudiandae? Perferendis.
            </p>
        </x-admin.section>

        <x-admin.section
            class="col-span-6">
            <p>
                <strong>Section without title and subtitle, only content.</strong> Lorem ipsum dolor, sit amet
                consectetur adipisicing elit. Rerum, hic autem in quia porro harum
                asperiores reiciendis nostrum dolorem quibusdam officiis reprehenderit.
            </p>
        </x-admin.section>

    </div>

</x-admin.layout.page>
