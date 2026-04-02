<div class="bg-surface-container-lowest p-8 rounded-xl flex flex-col justify-between aspect-square md:aspect-auto">
    <div>
        <span class="text-label-sm font-medium uppercase tracking-widest text-on-surface-variant block mb-4">{{ $label }}</span>
        <div class="w-10 h-10 bg-opacity-20 rounded-full flex items-center justify-center mb-6"
             :class="{
                'bg-green-100': $icon === 'payments',
                'bg-red-100': $icon === 'warning',
                'bg-slate-100': $icon === 'analytics'
             }">
            <span class="material-symbols-outlined"
                  :class="{
                    'text-green-700': $icon === 'payments',
                    'text-red-700': $icon === 'warning',
                    'text-slate-600': $icon === 'analytics'
                  }">{{ $icon }}</span>
        </div>
    </div>
    <h2 class="font-headline text-3xl font-bold {{ $valueColor }}">{{ $value }}</h2>
</div>