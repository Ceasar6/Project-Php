<h2>List Grade </h2>
<a href="index.php?page=add-grade">Add </a>
<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Grade Name</th>
        <th>Status</th>
        <th colspan="2"> Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($grades as $key => $grade) : ?>
        <tr>
            <td> <?php echo ++$key ?></td>
            <td><?php echo $grade->getGradeName() ?></td>
            <td><?php echo $grade->getStatus() ?></td>
            <td class="td-update"><a class="update-table"
                                     href="index.php?page=update-grade&id=<?php echo $grade->getId() ?>"><i
                            class="fas fa-user-edit"></i>&nbsp;Update</a></td>
            <td class="td-delete"><a class="delete-table" onclick="return confirm('Are you sure')"
                                     href="index.php?page=delete-grade&id=<?php echo $grade->getId() ?>"><i
                            class="fas fa-calendar-times"></i>&nbsp; Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
</tbody>
</table>