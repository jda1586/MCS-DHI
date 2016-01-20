<table>
    <tr>
        <td>Code:</td>
        <td>{{ $e->getCode() }}</td>
    </tr>
    <tr>
        <td>File:</td>
        <td>{{ $e->getFile() }}</td>
    </tr>
    <tr>
        <td>Line:</td>
        <td>{{ $e->getLine() }}</td>
    </tr>
    <tr>
        <td>Messege:</td>
        <td>{{ $e->getMessage() }}</td>
    </tr>
    <tr>
        <td>Trace:</td>
        <td>{{ $e->getTraceAsString() }}</td>
    </tr>
</table>