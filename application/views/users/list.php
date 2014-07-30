<div class="panel-users">
<input id="user-search" type="text" class="form-control" placeholder="Search" /><br />
<div class="alert alert-info">Check out the <a class="alert-link" href="/users/index/grid">grid directory view</a>.</div>
<table class="table table-hover">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Role</th>
        <th>Year</th>
        <!-- <th>Profile</th> -->
    </tr>
    <? foreach ($users as $user) { ?>
    <tr class="user-row">
        <td><? echo $user->first_name; ?></td>
        <td><? echo $user->last_name; ?></td>
        <td><? echo $user->sunet; ?>@stanford.edu</td>
        <td><? echo ucfirst($user->house) . ' ' . $user->room; ?></td>
        <td><? echo ucfirst($user->role); ?></td>
        <td><? echo $user->year; ?></td>
        <!-- <td><a href="/users/view/<? echo $user->id; ?>">View</a></td> -->
    </tr>
    <? } ?>
</table>
</div>
<script>
$('#user-search').keyup(function() {
    var query = $(this).val().toLowerCase();
    $('.user-row').each(function() {
        if ($(this).html().toLowerCase().indexOf(query) >= 0) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});
</script>