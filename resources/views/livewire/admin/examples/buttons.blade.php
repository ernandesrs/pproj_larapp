<x-admin.layout.page
    icon="grid-fill"
    title="Buttons"
    subtitle="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi similique a temporibus.">

    <x-admin.section
        title="Section with title, subtitle and content"
        subtitle="Quibusdam officiis reprehenderit fugiat dolor blanditiis">

        <div class="flex justify-center gap-x-6 py-6">
            <div class="flex flex-col">
                <x-admin.form.field
                    label="Button variant"
                    type="select"
                    wire:model.blur="variant"
                    :options="[
                        [
                            'label' => 'Primary',
                            'value' => 'primary',
                        ],
                        [
                            'label' => 'Secondary',
                            'value' => 'secondary',
                        ],
                        [
                            'label' => 'Success',
                            'value' => 'success',
                        ],
                        [
                            'label' => 'Info',
                            'value' => 'info',
                        ],
                        [
                            'label' => 'Danger',
                            'value' => 'danger',
                        ],
                        [
                            'label' => 'Dark',
                            'value' => 'dark',
                        ],
                        [
                            'label' => 'Light',
                            'value' => 'light',
                        ],
                    ]" />
            </div>

            <div class="flex flex-col">
                <x-admin.form.field
                    label="Button size"
                    type="select"
                    wire:model.blur="size"
                    :options="[
                        [
                            'label' => 'XS',
                            'value' => 'xs',
                        ],
                        [
                            'label' => 'SM',
                            'value' => 'sm',
                        ],
                        [
                            'label' => 'LG',
                            'value' => 'lg',
                        ],
                    ]" />
            </div>

            <div class="flex flex-col">
                <x-admin.form.field
                    label="Button style"
                    type="select"
                    wire:model.blur="style"
                    :options="[
                        [
                            'label' => 'Default',
                            'value' => null,
                        ],
                        [
                            'label' => 'Outlined',
                            'value' => 'outlined',
                        ],
                        [
                            'label' => 'Flat',
                            'value' => 'flat',
                        ],
                        [
                            'label' => 'Link',
                            'value' => 'link',
                        ],
                    ]" />
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
