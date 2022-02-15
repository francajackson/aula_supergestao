<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    /*
    if(empty($variavel)) {} // retornar true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var = 'xya'
    */
@endphp


@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>

        Fornecedor: {{ $fornecedor ['nome'] }}
        <br>

        Status: {{ $fornecedor ['status'] }}
        <br>
        
        CNPJ: {{ $fornecedor ['cnpj'] ?? 'Dado não informado'}} 
        <br>

        Telefone: ({{ $fornecedor ['ddd'] ?? '  ' }}) {{$fornecedor ['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira iteração do Loop
        @endif
        @if ($loop->last)
            Ultíma iteração do Loop
            <br>
            <hr>
            Total de registros: {{$loop->count}}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset

<br>