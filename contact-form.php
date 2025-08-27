<!-- form section starts here -->
<div class="max-w-[1440px] mx-auto bg-[#FFFCF4]">
    <div class="container py-[20px]">
        <h1 class="sen text-center text-[38px] sen font-bold text-[#171100] leading-[48px] tracking-[.76px]">Students Information</h1>
        <p class="poppins text-center text-[18px] leading-[30px] text-[#696262] mb-[15px]">Fill the Information correctly</p>



        <div class="">
            <?php
            $fName = $lName = $phone = $gender = $email = $address = '';
            $students = [];


            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $fName = $_POST['first_name'];
                $lName = $_POST['last_name'];
                $phone = $_POST['phone'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                if (!isset($_SESSION['students'])) {
                    $_SESSION['students'] = [];
                }


                if (!empty($fName) && !empty($phone) && !empty($gender) && !empty($email) && !empty($address)) {
                    $newStudent = [
                        'first-name' => $fName,
                        'last-name' => $lName,
                        'phone'  => $phone,
                        'gender' => $gender,
                        'email' => $email,
                        'address' => $address
                    ];
                    array_push($_SESSION['students'], $newStudent);
                }

                if (isset($_SESSION['students'])) {
                    $newStudent = $_SESSION['students'];
                }
            };
            ?>


            <div class="flex justify-center items-center ">
                <form
                    action=""
                    method="POST"
                    class="bg-amber-100 w-1/2 p-8 rounded-[5%] shadow-xl space-y-4">
                    <div>
                        <label for="first_name" class="block font-semibold mb-1">First Name</label>
                        <input
                            type="text"
                            name="first_name"
                            id="first_name"
                            class="w-full p-2 border border-gray-300 rounded">
                    </div>

                    <div>
                        <label for="last_name" class="block font-semibold mb-1">Last Name</label>
                        <input
                            type="text"
                            name="last_name"
                            id="last_name"
                            class="w-full p-2 border border-gray-300 rounded">
                    </div>

                    <div>
                        <label for="phone" class="block font-semibold mb-1">Mobile</label>
                        <input
                            type="tel"
                            name="phone"
                            id="phone"
                            class="w-full p-2 border border-gray-300 rounded">
                    </div>

                    <div>
                        <label for="gender" class="block font-semibold mb-1">Gender</label>
                        <select
                            name="gender"
                            id="gender"
                            class="w-full p-2 border border-gray-300 rounded">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="email" class="block font-semibold mb-1">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="w-full p-2 border border-gray-300 rounded">
                    </div>

                    <div>
                        <label for="address" class="block font-semibold mb-1">Address</label>
                        <textarea
                            name="address"
                            id="address"
                            class="w-full p-2 border border-gray-300 rounded"
                            rows="2">
                        </textarea>
                    </div>

                    <div class="flex justify-end gap-3 pt-4">
                        <button
                            type="reset"
                            class="bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded cursor-pointer">
                            Reset
                        </button>

                        <button
                            type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Submit
                        </button>

                    </div>
                </form>
            </div>



        </div>

        <div class="flex justify-center mt-10">
            <table class="w-4/5 bg-amber-100 border border-gray-300 rounded-[5%] shadow-xl text-sm text-left text-gray-700">
                <thead class="bg-amber-200 text-gray-800">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">First Name</th>
                        <th class="border border-gray-300 px-4 py-2">Last Name</th>
                        <th class="border border-gray-300 px-4 py-2">Mobile</th>
                        <th class="border border-gray-300 px-4 py-2">Gender</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($students)) : ?>

                        <tr>
                            <td class="border border-gray-300 px-4 py-2">John</td>
                            <td class="border border-gray-300 px-4 py-2">Doe</td>
                            <td class="border border-gray-300 px-4 py-2">123 456 7890</td>
                            <td class="border border-gray-300 px-4 py-2">Male</td>
                            <td class="border border-gray-300 px-4 py-2">john@example.com</td>
                            <td class="border border-gray-300 px-4 py-2">123 Main St</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Jane</td>
                            <td class="border border-gray-300 px-4 py-2">Smith</td>
                            <td class="border border-gray-300 px-4 py-2">123 456 7890</td>
                            <td class="border border-gray-300 px-4 py-2">Female</td>
                            <td class="border border-gray-300 px-4 py-2">jane@example.com</td>
                            <td class="border border-gray-300 px-4 py-2">456 Oak Ave</td>
                        </tr>

                    <?php else :  ?>

                        <?php foreach ($students as $student) : ?>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $student['first-name']; ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $student['last-name']; ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $student['phone']; ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $student['gender']; ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $student['email']; ?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $student['address']; ?></td>
                            </tr>

                        <?php endforeach; ?>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>





    </div>
</div>
<!-- form section ends here -->