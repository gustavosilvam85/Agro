@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header d-flex justify-content-between align-items-center mb-4">
        <h1 class="title">Produtos</h1>
        <a class="buttonCreate" href="/produtos/create">Criar Produto</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="label">Nome</th>
                <th class="label">Descrição</th>
                <th class="label">Preço</th>
                <th class="label">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td class="products">{{ $produto->name }}</td>
                <td class="products">{{ $produto->description }}</td>
                <td class="products">R$ {{ number_format($produto->price, 2, ',', '.') }}</td>
                <td>
                    <div class="buttons">
                        <a class="actions" href="{{ route('produtos.edit', $produto->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                                <path d="M 46.574219 3.425781 C 45.625 2.476563 44.378906 2 43.132813 2 C 41.886719 2 40.640625 2.476563 39.691406 3.425781 C 39.691406 3.425781 39.621094 3.492188 39.53125 3.585938 C 39.523438 3.59375 39.511719 3.597656 39.503906 3.605469 L 4.300781 38.804688 C 4.179688 38.929688 4.089844 39.082031 4.042969 39.253906 L 2.035156 46.742188 C 1.941406 47.085938 2.039063 47.453125 2.292969 47.707031 C 2.484375 47.898438 2.738281 48 3 48 C 3.085938 48 3.171875 47.988281 3.257813 47.964844 L 10.746094 45.957031 C 10.917969 45.910156 11.070313 45.820313 11.195313 45.695313 L 46.394531 10.5 C 46.40625 10.488281 46.410156 10.472656 46.417969 10.460938 C 46.507813 10.371094 46.570313 10.308594 46.570313 10.308594 C 48.476563 8.40625 48.476563 5.324219 46.574219 3.425781 Z M 45.160156 4.839844 C 46.277344 5.957031 46.277344 7.777344 45.160156 8.894531 C 44.828125 9.222656 44.546875 9.507813 44.304688 9.75 L 40.25 5.695313 C 40.710938 5.234375 41.105469 4.839844 41.105469 4.839844 C 41.644531 4.296875 42.367188 4 43.132813 4 C 43.898438 4 44.617188 4.300781 45.160156 4.839844 Z M 5.605469 41.152344 L 8.847656 44.394531 L 4.414063 45.585938 Z"></path>
                            </svg>
                        </a>
                        <a class="actions" href="{{ route('produtos.destroy', $produto->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                                <path d="M 42 5 L 32 5 L 32 3 C 32 1.347656 30.652344 0 29 0 L 21 0 C 19.347656 0 18 1.347656 18 3 L 18 5 L 8 5 C 7.449219 5 7 5.449219 7 6 C 7 6.550781 7.449219 7 8 7 L 9.085938 7 L 12.695313 47.515625 C 12.820313 48.90625 14.003906 50 15.390625 50 L 34.605469 50 C 35.992188 50 37.175781 48.90625 37.300781 47.515625 L 40.914063 7 L 42 7 C 42.554688 7 43 6.550781 43 6 C 43 5.449219 42.554688 5 42 5 Z M 20 44 C 20 44.554688 19.550781 45 19 45 C 18.449219 45 18 44.554688 18 44 L 18 11 C 18 10.449219 18.449219 10 19 10 C 19.550781 10 20 10.449219 20 11 Z M 20 3 C 20 2.449219 20.449219 2 21 2 L 29 2 C 29.550781 2 30 2.449219 30 3 L 30 5 L 20 5 Z M 26 44 C 26 44.554688 25.550781 45 25 45 C 24.449219 45 24 44.554688 24 44 L 24 11 C 24 10.449219 24.449219 10 25 10 C 25.550781 10 26 10.449219 26 11 Z M 32 44 C 32 44.554688 31.554688 45 31 45 C 30.445313 45 30 44.554688 30 44 L 30 11 C 30 10.449219 30.445313 10 31 10 C 31.554688 10 32 10.449219 32 11 Z"></path>
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection