<form action="" method="post">
    <fieldset>
        <label for="first_name">Firstname: </label>
        <input type="text" name="first_name" size="128" required>
    </fieldset>
    <fieldset>
        <label for="middle_name">Middle name: </label>
        <input type="text" name="middle_name" size="128">
    </fieldset>
    <fieldset>
        <label for="last_name">Last name: </label>
        <input type="text" name="last_name" size="128" required>
    </fieldset>
    <fieldset>
        <label for="email">Email: </label>
        <input type="email" name="email" size="128" required>
    </fieldset>
    <fieldset>
        <label for="gender">Gender: </label>
        <select name="gender" required>
            <option value="">--Please choose an option--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </fieldset>
    <fieldset>
        <label for="occupation">Occupation: </label>
        <input type="text" name="occupation" required>
    </fieldset>
    <fieldset>
        <label for="phone_num">Phone number: </label>
        <input type="tel" name="phone_num" minlength="10" required>
    </fieldset>
    <fieldset>
        <label for="date_of_birth">Date: </label>
        <input type="date" name="date_of_birth" required>
    </fieldset>
    <fieldset>
        <label for="address">Address: </label>
        <input type="text" name="address" size="128" required>
    </fieldset>
    <fieldset>
        <label for="membership_status">Membership status: </label>
        <select name="membership_status" required>
            <option value="">--Choose a status--</option>
            <option value="Active">Active</option>
            <option value="Visitor">Visitor</option>
            <option value="Inactive">Inactive</option>
        </select>
    </fieldset>

    <!-- # submit - button -->
    <input type="submit" name="submit" value="Add">
</form>
