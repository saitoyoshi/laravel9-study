@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
  つぶやきアプリを作りながら勉強中
{{ $slot }}
</a>
</td>
</tr>
