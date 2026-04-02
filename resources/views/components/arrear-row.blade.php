<div class="bg-surface-container-lowest px-6 py-4 rounded-xl flex flex-col md:flex-row md:items-center justify-between hover:bg-surface-container-high transition-colors group">
    <div class="flex items-center gap-4 mb-4 md:mb-0">
        <div class="w-12 h-12 bg-secondary-container rounded-full flex items-center justify-center font-bold text-on-secondary-container">
            {{ $initials }}
        </div>
        <div>
            <p class="font-headline text-lg font-semibold text-on-surface leading-tight">{{ $name }}</p>
            <p class="text-sm text-on-surface-variant">{{ $unit }}</p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-12">
        <div class="md:text-right">
            <p class="font-headline font-bold text-error">{{ $amount }}</p>
            <p class="text-[10px] uppercase font-semibold tracking-tighter text-on-surface-variant">
                {{ $overdueDays }} Day{{ $overdueDays !== 1 ? 's' : '' }} Overdue
            </p>
        </div>
        <button class="bg-surface-container text-on-surface-variant px-5 py-2.5 rounded-full flex items-center justify-center gap-2 text-sm font-semibold hover:bg-primary hover:text-white transition-all active:scale-95">
            <span class="material-symbols-outlined text-lg">chat</span>
            WhatsApp Nudge
        </button>
    </div>
</div>