<?php
echo '<p style = "color: red">Bai 3</p>';
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
echo '<table border="1">
        <thead>
            <tr>
                <th>Ten khoa hoc</th>
            </tr>
        </thead>
        <tbody>';
foreach ($arrs as $key => $language) {
    echo '<tr>';
    echo '<td>' . $language . '</td>';  // Ngôn ngữ lập trình
    echo '</tr>';
}
echo   '</tbody>
    </table>';
?>