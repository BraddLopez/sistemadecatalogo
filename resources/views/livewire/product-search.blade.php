<!-- resources/views/livewire/product-search.blade.php -->
<div>
    <!-- Sección de búsqueda -->
    <section class="search-section">
        <h2>Busca un producto</h2>
        <form class="search-form" wire:submit.prevent>
            <input type="text" placeholder="Buscar productos..." class="search-input" wire:model="query">

            <select class="search-select" wire:model="category">
                <option value="">Todas las categorías</option>
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}"> {{$categorie->name}}</option>
                @endforeach
            </select>
        </form>
    </section>

    <!-- Catálogo de productos -->
    <section class="catalog">
        <h2>Catálogo de Productos</h2>
        <div class="products">
            @foreach($products as $product)
                <div class="product-card">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->name}}">
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->description}}</p>
                    <p class="price">S/. {{$product->price}}</p>
                </div>
            @endforeach
        </div>

        <!-- Paginación -->
        <div class="pagination-container mt-4">
        {{ $products->links('pagination.custom', ['paginator' => $products]) }}
        </div>
        <head>
            <!-- Otras etiquetas head -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        </head>

    </section>
</div>
