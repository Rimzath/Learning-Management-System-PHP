<?php include("../actions/checkadmin.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>
<?php
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    mysqli_query($db_conn, "DELETE FROM user WHERE user.id = $id;") or die("Deletion user not possible");
    //mysqli_query($db_conn, "DELETE FROM teacher WHERE teacher.id = $id;") or die("Deletion teacher not possible");
    mysqli_query($db_conn, "DELETE FROM student WHERE student.id = $id;") or die("Deletion student not possible");
}
?>
<div class="flex overflow-hidden bg-white">
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
  <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main>
      <div class="pt-6 px-4">
        <div >

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 2xl:col-span-3" >

            <div class="mb-4 flex items-center justify-between">
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Student</h3>
              </div>
              <div class="flex-shrink-0">
                <a href="newstudent.php" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2" >Add new Student</a>
              </div>
            </div>

            <div class="flex flex-col m-8">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">ID</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Name</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Department</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Section</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Year</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400 inline-block">Actions</th>
                                    </tr>
                                </thead>


                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <?php
                                    $extract_user_query = 'SELECT * FROM user,student  WHERE user.user_type="student" AND user.id = student.id';
                                    $result = mysqli_query($db_conn, $extract_user_query);
                                    while ($row = mysqli_fetch_object($result)) {
                                    ?>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white"><?php echo ($row->id); ?></td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                          <?php echo ucfirst($row->firstname); ?>
                                          <?php echo ucfirst($row->lastname); ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                          <?php
                                          $deptquery = "SELECT * FROM department WHERE department.id = '$row->departmentid'";
                                          $deptres = mysqli_query($db_conn, $deptquery);
                                          $deptrow = mysqli_fetch_object($deptres);
                                          echo ucwords($deptrow->name);
                                          ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                          <?php
                                          $secquery = "SELECT * FROM section WHERE section.id = '$row->sectionid'";
                                          $secres = mysqli_query($db_conn, $secquery);
                                          $secrow = mysqli_fetch_object($secres);
                                          echo ucwords($secrow->name);
                                          ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                          <?php
                                          $yearquery = "SELECT * FROM years WHERE years.id = '$row->yearid'";
                                          $yearres = mysqli_query($db_conn, $yearquery);
                                          $yearrow = mysqli_fetch_object($yearres);
                                          echo ucwords($yearrow->year);
                                          ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white inline-block">
                                            <form action method="POST">
                                                    <button name=delete type="submit" value=<?php echo ($row->id) ?> data-modal-toggle="delete-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                        Delete
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>


        </div>
        




        

      </div>
    </main>

<?php include("../public/footer.php")?>