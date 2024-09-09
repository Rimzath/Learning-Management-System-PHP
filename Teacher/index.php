<?php include("../actions/checkteacher.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>

<div class="flex overflow-hidden bg-white">
  
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  <div
    class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
  <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main>
      <div class="pt-6 px-4">
          <div class="mt-4 w-full grid grid-cols-1 mb-4 md:grid-cols-2 xl:grid-cols-3 gap-4">
              <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <span
                      class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">4</span>
                    <h3 class="text-base font-normal text-gray-500">Total Section Alloted</h3>
                  </div>
                  <div
                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                    14.6%
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <span
                      class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"
                      >2</span
                    >
                    <h3 class="text-base font-normal text-gray-500">
                      Total Subject Teaching
                    </h3>
                  </div>
                  <div
                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold"
                  >
                    32.9%
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <span
                      class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"
                      >1</span
                    >
                    <h3 class="text-base font-normal text-gray-500">
                      Total Department alloted
                    </h3>
                  </div>
                  <div
                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold"
                  >
                    32.9%
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 2xl:col-span-2">
            <div class="mb-4 flex items-center justify-between">
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Subjects</h3>
              </div>
            </div>

            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="min-w-full align-middle">
                        <div class="shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">ID</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Subject name</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">1</td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">Database and Management System</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>

    

<?php include("../public/footer.php")?>