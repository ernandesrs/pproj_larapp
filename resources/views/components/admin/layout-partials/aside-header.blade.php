<div class="aside-header">
    <div class="flex flex-wrap justify-center">
        <x-common.thumb type="avatar" size="default"
            image="{{ \Auth::user()->photo ? \Storage::url(\Auth::user()->photo) : '' }}"
            alternative-text="{{ \Auth::user()->first_name }}" />

        <div class="w-full my-2 text-center font-semibold text-lg text-gray-300">
            <p>{{ \Auth::user()->first_name }} {{ \Auth::user()->last_name }}</p>
        </div>
    </div>
</div>
