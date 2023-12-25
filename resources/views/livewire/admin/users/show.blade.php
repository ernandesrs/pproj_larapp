<x-admin.page
    title="{{ $title }}"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
        [
            'text' => __('words.see'),
            'href' => route('admin.users.show', ['user' => $user->id]),
        ],
    ]"
    :action-create="[
        'text' => __('words.new') . ' ' . __('words.user'),
        'href' => route('admin.users.create'),
    ]">
    <x-slot name="content">

        <div class="flex flex-wrap">
            <div class="basis-full mb-8 md:mb-0 md:basis-6/12 lg:basis-4/12 md:pr-4">
                <x-admin.section no-shadow no-border>
                    <x-slot name="content">
                        <div class="flex flex-wrap justify-center">
                            <x-common.thumb type="avatar" size="extralarge" alternative-text="{{ $user->first_name }}"
                                image="{{ $user->photo ? \Storage::url($user->photo) : '' }}" />
                        </div>
                    </x-slot>
                </x-admin.section>
            </div>

            <div class="basis-full md:basis-6/12 lg:basis-8/12 md:pl-4">
                <x-admin.section title="{{ __('phrases.basic_data') }}">
                    <x-slot name="content">
                        <div class="flow-root">
                            <dl class="-my-3 divide-y divide-gray-100 text-sm">
                                <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">{{ __('words.name') }}</dt>
                                    <dd class="text-gray-700 sm:col-span-2">{{ $user->first_name }}
                                        {{ $user->last_name }}</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">{{ __('words.username') }}</dt>
                                    <dd class="text-gray-700 sm:col-span-2">{{ $user->username }}</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">{{ __('words.email') }}</dt>
                                    <dd class="text-gray-700 sm:col-span-2">{{ $user->email }}</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Bio</dt>
                                    <dd class="text-gray-700 sm:col-span-2">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis
                                        explicabo
                                        doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit
                                        aperiam
                                        aspernatur neque molestiae labore aliquam soluta architecto?
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </x-slot>
                    <x-slot name="actions">
                        <x-common.button as="link" href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                            text="{{ __('words.edit') }} {{ __('words.user') }}"
                            append-icon="arrow-right" variant="info-outlined" />
                    </x-slot>
                </x-admin.section>
            </div>
        </div>

    </x-slot>
</x-admin.page>
