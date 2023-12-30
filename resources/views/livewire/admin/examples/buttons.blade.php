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
        </div>

        <div class="flex justify-center gap-x-6 py-6">

            <x-admin.buttons.clickable
                as="button"
                text="Only text"
                variant="{{ $this->variant }}"
                xs />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                text="Prepend icon"
                variant="{{ $this->variant }}"
                xs />

            <x-admin.buttons.clickable
                as="button"
                append-icon="arrow-right"
                text="Append icon"
                variant="{{ $this->variant }}"
                xs />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                append-icon="arrow-right"
                text="Two icons"
                variant="{{ $this->variant }}"
                xs />

        </div>

        <div class="flex justify-center gap-x-6 py-6">

            <x-admin.buttons.clickable
                as="button"
                text="Only text"
                variant="{{ $this->variant }}"
                sm />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                text="Prepend icon"
                variant="{{ $this->variant }}"
                sm />

            <x-admin.buttons.clickable
                as="button"
                append-icon="arrow-right"
                text="Append icon"
                variant="{{ $this->variant }}"
                sm />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                append-icon="arrow-right"
                text="Two icons"
                variant="{{ $this->variant }}"
                sm />

        </div>

        <div class="flex justify-center gap-x-6 py-6">

            <x-admin.buttons.clickable
                as="button"
                text="Only text"
                variant="{{ $this->variant }}" />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                text="Prepend icon"
                variant="{{ $this->variant }}" />

            <x-admin.buttons.clickable
                as="button"
                append-icon="arrow-right"
                text="Append icon"
                variant="{{ $this->variant }}" />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                append-icon="arrow-right"
                text="Two icons"
                variant="{{ $this->variant }}" />

        </div>

        <div class="flex justify-center gap-x-6 py-6">

            <x-admin.buttons.clickable
                as="button"
                text="Only text"
                variant="{{ $this->variant }}"
                lg />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                text="Prepend icon"
                variant="{{ $this->variant }}"
                lg />

            <x-admin.buttons.clickable
                as="button"
                append-icon="arrow-right"
                text="Append icon"
                variant="{{ $this->variant }}"
                lg />

            <x-admin.buttons.clickable
                as="button"
                prepend-icon="arrow-left"
                append-icon="arrow-right"
                text="Two icons"
                variant="{{ $this->variant }}"
                lg />

        </div>
    </x-admin.section>

</x-admin.layout.page>
