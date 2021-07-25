<div class="portfolio_view">
    <div class="portfolio_title">
       <h1>Портфолио</h1>
    </div>
<p>
<table>
<caption>Все проекты в следующей таблице являются вымышленными.</caption>
<thead>
    <tr>
        <th>Год</th>
        <th>Проект</th>
        <th>Описание</th>
    </tr>
</thead>
    <tbody>
    <?php

            foreach($data as $row)
             {
               echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
        }

         ?>
    </tbody>
</table>
</p>
</div>