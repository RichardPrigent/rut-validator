<div>
    <main class="container mx-auto px-4 py-8">
        <!-- Sección para Validar RUN -->
        <section>
            @livewire('validate-run')
        </section>

        <!-- Sección para Noticias -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @livewire('news-card')
            @livewire('news-card')
            @livewire('news-card')
        </section>

        <!-- Sección para Clima -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @livewire('weather-card')
        </section>

        <!-- Sección para Cotización de Monedas -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            @livewire('currency-card')
            @livewire('currency-card')
            @livewire('currency-card')
        </section>
    </main>
</div>
