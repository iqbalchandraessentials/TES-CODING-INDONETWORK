<div class="container">
    <h1>Membership</h1>

    <div class="table-resposive">
        <table class="table" id="table_id" style="width: 80%;">
            <thead>
                <tr>
                    <th>name</th>
                    <th>membersip</th>
                    <th>status</th>
                    <th>updated at</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($data['companies'] as $comp) : ?>
                    <tr>
                        <td>
                            <?= $comp['name'] ?>
                        </td>
                        <td>
                            <?= $comp['membership_type'] ?>
                        </td>
                        <td>
                            <?= $comp['status'] ?>
                        </td>
                        <td style="width: 20%;">
                            <?= $comp['updated_at'] ?>
                        </td>
                    </tr>

                <?php
                endforeach ?>
            </tbody>
        </table>
    </div>
</div>