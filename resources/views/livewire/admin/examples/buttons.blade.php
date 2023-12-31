<x-admin.layout.page
    icon="grid-fill"
    title="Buttons"
    subtitle="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique a temporibus.">

    <x-admin.section
        title="Section with title, subtitle and content"
        subtitle="Quibusdam officiis reprehenderit fugiat dolor blanditiis">

        <div class="flex justify-center gap-x-6 py-6">
            <div class="flex flex-col">
                <label class="mb-2" for="">Button variant</label>
                <select wire:model.blur="variant">
                    <option value="primary">Primary</option>
                    <option value="secondary">Secondary</option>
                    <option value="success">Success</option>
                    <option value="info">Info</option>
                    <option value="danger">Danger</option>
                    <option value="dark">Dark</option>
                    <option value="light">Light</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label class="mb-2" for="">Button size</label>
                <select wire:model.blur="size">
                    <option {{ $this->size == null ? 'selected' : '' }}>Default</option>
                    <option value="xs">XS</option>
                    <option value="sm">SM</option>
                    <option value="lg">LG</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label class="mb-2" for="">Button style</label>
                <select wire:model.blur="style">
                    <option {{ $this->size == null ? 'selected' : '' }}>Default</option>
                    <option value="outlined">Outlined</option>
                    <option value="flat">Flat</option>
                    <option value="link">Link</option>
                </select>
            </div>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-6 py-6">

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="app"
                variant="{{ $this->variant }}"
                :xs="$this->size == 'xs'"
                :sm="$this->size == 'sm'"
                :lg="$this->size == 'lg'"

                :outlined="$this->style == 'outlined'"
                :flat="$this->style == 'flat'"
                :link="$this->style == 'link'" />

            <x-admin.buttons.clickable
                as="button"
                text="Only text"
                variant="{{ $this->variant }}"
                :xs="$this->size == 'xs'"
                :sm="$this->size == 'sm'"
                :lg="$this->size == 'lg'"

                :outlined="$this->style == 'outlined'"
                :flat="$this->style == 'flat'"
                :link="$this->style == 'link'" />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="app"
                text="Loading"
                variant="{{ $this->variant }}"
                :xs="$this->size == 'xs'"
                :sm="$this->size == 'sm'"
                :lg="$this->size == 'lg'"
                loading

                :outlined="$this->style == 'outlined'"
                :flat="$this->style == 'flat'"
                :link="$this->style == 'link'" />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                text="Prepend icon"
                variant="{{ $this->variant }}"
                :xs="$this->size == 'xs'"
                :sm="$this->size == 'sm'"
                :lg="$this->size == 'lg'"

                :outlined="$this->style == 'outlined'"
                :flat="$this->style == 'flat'"
                :link="$this->style == 'link'" />

            <x-admin.buttons.clickable
                as="button"
                append-icon="arrow-right"
                text="Append icon"
                variant="{{ $this->variant }}"
                :xs="$this->size == 'xs'"
                :sm="$this->size == 'sm'"
                :lg="$this->size == 'lg'"

                :outlined="$this->style == 'outlined'"
                :flat="$this->style == 'flat'"
                :link="$this->style == 'link'" />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                append-icon="arrow-right"
                text="Two icons"
                variant="{{ $this->variant }}"
                :xs="$this->size == 'xs'"
                :sm="$this->size == 'sm'"
                :lg="$this->size == 'lg'"

                :outlined="$this->style == 'outlined'"
                :flat="$this->style == 'flat'"
                :link="$this->style == 'link'" />

        </div>

        </div>
    </x-admin.section>

</x-admin.layout.page>
