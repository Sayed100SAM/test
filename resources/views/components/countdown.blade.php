<section class="container-page py-12 md:py-16" x-data="countdown" data-aos="fade-up">
    <div class="text-center">
        <p class="text-sm font-extrabold uppercase tracking-[0.2em] text-primary">Limited time only</p>
        <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-dark md:text-4xl">Special Offers of the week!</h2>
    </div>
    <div class="mt-7 flex justify-center gap-2 sm:gap-4">
        <template x-for="item in [{ label: 'Days', value: days }, { label: 'Hours', value: hours }, { label: 'Minutes', value: minutes }, { label: 'Seconds', value: seconds }]">
            <div class="min-w-[70px] rounded-2xl bg-pink-100 px-3 py-4 text-center sm:min-w-[96px]">
                <p class="text-2xl font-extrabold text-sale sm:text-3xl" x-text="item.value"></p>
                <p class="mt-1 text-xs font-bold uppercase tracking-wide text-muted" x-text="item.label"></p>
            </div>
        </template>
    </div>
</section>

