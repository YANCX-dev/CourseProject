<p style="font-weight: bold">Дорогой, {{ $userName }}, спасибо за приобретение билета!</p>
<p style="font-weight: bold;">Ваш билет:</p>
<table border="1" cellpadding="5" style="width: 100%; margin-bottom: 20px; border: 1px solid black; border-collapse: collapse">
    <thead style="font-weight: bold; padding: 5px; background: lightblue; border: 1px solid #dddddd">
    <tr>
        <th style="font-weight: bold; padding: 5px; background: #badce3; border: 1px solid #dddddd;">
            <span>Точка отбытия</span>
        </th>
        <th style="font-weight: bold; padding: 5px; background: #badce3; border: 1px solid #dddddd;">
            <span>Время отбытия</span>
        </th>
        <th style="font-weight: bold; padding: 5px; background: #badce3; border: 1px solid #dddddd;">
            <span>Точка прибытия</span>
        </th>
        <th style="font-weight: bold; padding: 5px; background: #badce3; border: 1px solid #dddddd;">
            <span>Время прибытия</span>
        </th>
        <th style="font-weight: bold; padding: 5px; background: #badce3; border: 1px solid #dddddd;">
            <span>Время в пути</span>
        </th>
        <th style="font-weight: bold; padding: 5px; background: #badce3; border: 1px solid #dddddd;">
            <span>Номер автобуса</span>
        </th>
        <th style="font-weight: bold; padding: 5px; background: #badce3; border: 1px solid #dddddd;">
            <span>Стоимость билета</span>
        </th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #dddddd">{{ $departurePoint }}</td>
            <td style="border: 1px solid #dddddd">{{ $departureTime }}</td>
            <td style="border: 1px solid #dddddd">{{ $destination }}</td>
            <td style="border: 1px solid #dddddd">{{ $arrivalTime }}</td>
            <td style="border: 1px solid #dddddd">{{ $travelTime }}</td>
            <td style="border: 1px solid #dddddd">{{ $busRegNum }}</td>
            <td style="border: 1px solid #dddddd">{{ $ticketPrice }}</td>
        </tr>

    </tbody>
</table>
