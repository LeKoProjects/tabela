<!DOCTYPE html>
    <html class="wide wow-animation" lang="en">
    
<head>
    <!-- Site Title-->
    <title>Melhores Atacantes</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">
        <div style="text-align: center">
            <h1>Melhores Goleiros</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>GOLEIROS</th>
                            <th>PAÍS</th>
                            <th>TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $index => $row)
                            @if ($index > 1) <!-- Alterado para pular a primeira linha de dados -->
                            <tr>
                                <td>{{ $index - 1 }}</td> <!-- Ajustado para manter a numeração correta começando de 1 -->
                                <td>
                                    {{ $row[1] }} <!-- Nome do goleiro -->
                                </td>
                                <td>
                                    {{ $row[2] }} <!-- Supondo que o índice 2 seja o nome do país -->
                                </td>
                                <td>
                                    {{ $row[3] }} <!-- Supondo que o índice 3 seja o nome do time -->
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>