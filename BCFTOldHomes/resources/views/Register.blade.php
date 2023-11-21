<!-- register.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light blue background */
            color: #fff; /* White text */
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            
        }

        h2 {
            color: #007acc; /* Dark blue header */
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #007acc; /* Dark blue form background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #fff; /* White label text */
        }

        select,
        input,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #007acc; /* Dark blue border */
            border-radius: 4px;
            background-color: #fff; /* White input background */
            color: #007acc; /* Dark blue text inside input fields */
        }

        select:focus,
        input:focus {
            outline: none;
            border-color: #005780; /* Slightly darker blue when focused */
        }

        #patientFields {
            display: none;
        }

        button {
            background-color: #4caf50; /* Green button */
            color: #fff; /* White button text */
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>

<body>

    <h2>User Registration</h2>

    <form action={{ url('/api/registration')}} method="POST">
        @csrf
        <!-- Role -->
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="Admin">Admin</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Doctor">Doctor</option>
            <option value="Patient">Patient</option>
            <!-- Add other roles as needed -->
        </select>

        <!-- First Name, Last Name, Email, Phone, Password, Date of Birth -->
        <label for="first_name">First Name:</label>
        <input type="text" name="firstName" id="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="lastName" id="last_name" required>

        <label for="email">Email:</label>
        <input type="email" name="emailID" id="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phoneNumber" id="phone" required>

        <label for="password">Password:</label>
        <input type="password" name="userPass" id="password" required>

        <label for="dob">Date of Birth: YYYY-MM-DD</label>
        <input type="text" name="DOB" id="dob" required>

        <!-- Additional Fields for Patient -->
        <div id="patientFields">
            <label for="family_code">Family Code:</label>
            <input type="text" name="familyCode" id="family_code">

            <label for="emergency_contact">Emergency Contact:</label>
            <input type="text" name="emergencyContactID" id="emergency_contact">

            <label for="relation_to_emergency_contact">Relation to Emergency Contact:</label>
            <input type="text" name="relation_to_emergency_contact" id="relation_to_emergency_contact">
        </div>

        <!-- OK and Cancel Buttons -->
        <button type="submit" name="register">OK</button>
        <button type="button" onclick="clearFields()">Cancel</button>
    </form>

    <!-- JavaScript to Show/Hide Patient Fields -->
    <script>
        document.getElementById('role').addEventListener('change', function () {
            var patientFields = document.getElementById('patientFields');
            if (this.value === 'Patient') {
                patientFields.style.display = 'block';
            } else {
                patientFields.style.display = 'none';
            }
        });

        function clearFields() {
            // You can add logic to clear form fields if needed
        }
    </script>

</body>

</html>
