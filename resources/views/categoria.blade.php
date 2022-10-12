<x-layouts.app>
    @include('main-panel.cart')
        <main>
            <div class=" mt-8 mb-lg-14 mb-8">
                <div class="container">
                    <div class="row gx-10">
                        @include('left-panel.categorias')
                        @include('main-panel.productos')
                    </div>
                </div>
            </div>    
        </main>
</x-layouts.app>