<!-- resources/views/Additional_Information_Patient.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
</head>
<body>

    <h1>Patient Information</h1>

    <!-- Form for updating patient information -->
<form action="{{ url('/api/Patients')}}" method="get">
    @csrf

    <label for="patientId">Patient ID:</label>
    <input type="text" id="patientId" name="patientId" oninput="fetchPatientInfo()" required>

    <!-- Display fields (read-only) for patient group, admission date, and email ID -->
    <label for="patientGroup">Patient Group:</label>
    <input type="text" id="patientGroup" name="patientGroup" readonly>

    <label for="admissionDate">Admission Date:</label>
    <input type="text" id="admissionDate" name="admissionDate" readonly>

    <label for="emailID">Email ID:</label>
    <input type="text" id="emailID" name="emailID" readonly>

    <!-- Add any other additional fields for updating information -->

    <button type="submit">OK</button>
    <button type="button" onclick="cancelForm()">Cancel</button>
</form>

<script>
   function fetchPatientInfo() {
    var patientId = document.getElementById('patientId').value;

    // Make an AJAX request to fetch patient details based on the entered ID
    fetch(`/api/Patients/${patientId}`, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    .then(response => response.json())
    .then(data => {
        // Populate the fields with fetched data
        document.getElementById('patientGroup').value = data.patientGroup;
        document.getElementById('admissionDate').value = data.admissionDate;
        document.getElementById('emailID').value = data.emailID;
        // Populate other fields as needed
    })
    .catch(error => {
        console.error('Error:', error);
        // Optionally, handle errors here
    });
}

    function cancelForm() {
        // Add any additional logic you may need before canceling
        alert('Form canceled'); // Optional: Show an alert or perform other actions

        // Optionally, you can reset the form fields
        document.getElementById('patientId').value = '';
        document.getElementById('patientGroup').value = '';
        document.getElementById('admissionDate').value = '';
        document.getElementById('emailID').value = '';
        // Reset other fields as needed
    }
</script>

</body>
</html>
