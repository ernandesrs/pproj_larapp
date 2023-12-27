@props([
    // time left in minutes
    'timer' => null,
    'title' => 'Call to action title via prop title',
    'buttonText' => 'Text via prop buttonText',
    'buttonUrl' => '#',
])

<x-customer.cards.card
    x-data="{
        timer: {{ $timer ? $timer * 60 : -1 }},
        timerDisplayable: {
            hours: 0,
            minutes: 0,
            seconds: 0
        },
    
        init() {
            if (this.timer == -1) {
                return;
            }
    
            this.turnTimerDisplayable();
    
            setInterval(() => {
                console.log('jklasf')
                this.timer--;
    
                this.turnTimerDisplayable();
            }, 1000);
        },
    
        turnTimerDisplayable() {
            this.timerDisplayable.hours = (Math.floor(this.timer / 3600)).toString().padStart(2, '0');
            this.timerDisplayable.minutes = (Math.floor((this.timer % 3600) / 60)).toString().padStart(2, '0');
            this.timerDisplayable.seconds = (this.timer % 60).toString().padStart(2, '0');
        },
    }"
    class="bg-gradient-to-b from-customer-secondary-normal to-customer-primary-dark-2 cursor-default group">
    <div class="flex flex-col items-center text-center xl:px-28">
        <template x-if="timer != -1">
            <div
                class="px-6 py-3 bg-customer-danger-dark-2 rounded-xl font-semibold text-customer-white mb-4 animate-pulse">
                Expires in <span><span x-text="timerDisplayable.hours"></span>:<span
                        x-text="timerDisplayable.minutes"></span>:<span x-text="timerDisplayable.seconds"></span></span>
            </div>
        </template>

        <x-customer.h1 text="{{ $title }}"
            class="xl:text-5xl text-customer-white duration-300 group-hover:scale-105" />

        <div class="mt-5">
            <x-customer.buttons.btn as="link" href="{{ $buttonUrl }}" text="{{ $buttonText }}"
                append-icon="arrow-right" variant="secondary" />
        </div>
    </div>
</x-customer.cards.card>
