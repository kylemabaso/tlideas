<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'TL Ideas')

            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>
