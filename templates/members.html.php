<p>
    <?= $totalMembers ?> members are in the database.
</p>


<?php foreach ($members as $member): ?>
    <blockquote>
        <p>
            <?= htmlspecialchars($member['id'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['first_name'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['middle_name'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['last_name'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['email'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['gender'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['phone_num'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['date_of_birth'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['address'], ENT_QUOTES, 'UTF-8') ?>,
            <?= htmlspecialchars($member['membership_status'], ENT_QUOTES, 'UTF-8') ?>

            <!--23 Jan 23 -->
        <form action="deletemember.php" method="post">
            <input type="hidden" name="id" value="<?= $member['id'] ?>">
            <input type="submit" value="Delete">
        </form>
        </p>
    </blockquote>

<?php endforeach; ?>

