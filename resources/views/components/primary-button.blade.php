<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-4 bg-gradient-to-r from-lime-500 to-green-600 border border-transparent rounded-2xl font-bold text-xs text-white uppercase tracking-[0.2em] hover:scale-[1.02] active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-150 shadow-xl shadow-green-900/20']) }}>
    {{ $slot }}
</button>
