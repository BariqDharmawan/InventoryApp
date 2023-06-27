<x-app-layout title-app="Dashboard">
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <x-card class="flex flex-col">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today's Money</p>
                        <h5 class="mb-0 font-bold">
                            $53,000
                            <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>
                        </h5>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>

    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                            <div class="flex flex-col h-full">
                                <p class="pt-2 mb-1 font-semibold">Built by developers</p>
                                <h5 class="font-bold">Soft UI Dashboard</h5>
                                <p class="mb-12">From colors, cards, typography to complex elements, you will find the
                                    full documentation.</p>
                                <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500"
                                    href="javascript:;">
                                    Read More
                                    <i
                                        class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                            <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                                <img alt="waves" class="absolute top-0 hidden w-1/2 h-full lg:block"
                                    src="{{ asset('img/shapes/waves-white.svg') }}" />
                                <div class="relative flex items-center justify-center h-full">
                                    <img alt="rocket" class="relative z-20 w-full pt-6"
                                        src="{{ asset('img/illustrations/rocket-white.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl"
                    style="background-image: url('{{ asset('img/ivancik.jpg') }}')">
                    <span
                        class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Work with the rockets</h5>
                        <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all
                            about who take the opportunity first.</p>
                        <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-sm"
                            href="javascript:;">
                            Read More
                            <i
                                class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="py-4 pr-1 mb-4 bg-gradient-to-tl from-gray-900 to-slate-800 rounded-xl">
                        <div>
                            <canvas height="170" id="chart-bars"></canvas>
                        </div>
                    </div>
                    <h6 class="mt-6 mb-0 ml-2">Active Users</h6>
                    <p class="ml-2 leading-normal text-sm">(<span class="font-bold">+23%</span>) than last week</p>
                    <div class="w-full px-6 mx-auto max-w-screen-2xl rounded-xl">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none flex-grow py-4 pl-0 pr-3 mt-0">
                                <div class="flex mb-2">
                                    <div
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-purple-700 to-pink-500 text-neutral-900">
                                        <x-icon.document />
                                    </div>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs">Users</p>
                                </div>
                                <h4 class="font-bold">36K</h4>
                                <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60"
                                        class="duration-600 ease-soft -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                        role="progressbar"></div>
                                </div>
                            </div>
                            <div class="flex-none flex-grow py-4 pl-0 pr-3 mt-0">
                                <div class="flex mb-2">
                                    <div
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-red-500 to-yellow-400 text-neutral-900">
                                        <x-icon.credit-card />
                                    </div>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs">Sales</p>
                                </div>
                                <h4 class="font-bold">435$</h4>
                                <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30"
                                        class="duration-600 ease-soft -mt-0.38 w-3/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                        role="progressbar"></div>
                                </div>
                            </div>
                            <div class="flex-none flex-grow py-4 pl-0 pr-3 mt-0">
                                <div class="flex mb-2">
                                    <div
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-red-600 to-rose-400 text-neutral-900">
                                        <x-icon.setting />
                                    </div>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs">Items</p>
                                </div>
                                <h4 class="font-bold">43</h4>
                                <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
                                        class="duration-600 ease-soft -mt-0.38 -ml-px flex h-1.5 w-1/2 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                        role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <h6>Sales overview</h6>
                    <p class="leading-normal text-sm">
                        <i class="fa fa-arrow-up text-lime-500"></i>
                        <span class="font-semibold">4% more</span> in 2021
                    </p>
                </div>
                <div class="flex-auto p-4">
                    <div>
                        <canvas height="300" id="chart-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->

        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                            <h6>Projects</h6>
                            <p class="mb-0 leading-normal text-sm">
                                <i class="fa fa-check text-cyan-500"></i>
                                <span class="ml-1 font-semibold">30 done</span>
                                this month
                            </p>
                        </div>
                        <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                            <div class="relative pr-6 lg:float-right">
                                <a aria-expanded="false" class="cursor-pointer" dropdown-trigger>
                                    <i class="fa fa-ellipsis-v text-slate-400"></i>
                                </a>
                                <p class="hidden transform-dropdown-show"></p>

                                <ul class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']"
                                    dropdown-menu>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Another action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                        <x-table.index>
                            <x-slot name="thead">
                                <tr>
                                    <x-table.th label="Companies" />
                                    <x-table.th label="Members" />
                                    <x-table.th label="Budget" />
                                    <x-table.th label="Completion" />
                                </tr>
                            </x-slot>

                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img alt="xd"
                                                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                src="{{ asset('img/small-logos/logo-xd.svg') }}" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Soft UI XD Version</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="mt-2 avatar-group">
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team1" class="w-full rounded-full"
                                                src="{{ asset('img/team-1.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Ryan Tompson
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team2" class="w-full rounded-full"
                                                src="{{ asset('img/team-2.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Romina Hadid
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team3" class="w-full rounded-full"
                                                src="{{ asset('img/team-3.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Alexander Smith
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team4" class="w-full rounded-full"
                                                src="{{ asset('img/team-4.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Jessica Doe
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> $14,000 </span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="w-3/4 mx-auto">
                                        <div>
                                            <div>
                                                <span class="font-semibold leading-tight text-xs">60%</span>
                                            </div>
                                        </div>
                                        <div
                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60"
                                                class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                role="progressbar"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img alt="atlassian"
                                                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                src="{{ asset('img/small-logos/logo-atlassian.svg') }}" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Add Progress Track</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="mt-2 avatar-group">
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team5" class="w-full rounded-full"
                                                src="{{ asset('img/team-2.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Romina Hadid
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team6" class="w-full rounded-full"
                                                src="{{ asset('img/team-4.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Jessica Doe
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> $3,000 </span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="w-3/4 mx-auto">
                                        <div>
                                            <div>
                                                <span class="font-semibold leading-tight text-xs">10%</span>
                                            </div>
                                        </div>
                                        <div
                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10"
                                                class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                role="progressbar"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img alt="team7"
                                                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                src="{{ asset('img/small-logos/logo-slack.svg') }}" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Fix Platform Errors</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="mt-2 avatar-group">
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team8" class="w-full rounded-full"
                                                src="{{ asset('img/team-3.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Romina Hadid
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="team9" class="w-full rounded-full"
                                                src="{{ asset('img/team-1.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Jessica Doe
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> Not set </span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="w-3/4 mx-auto">
                                        <div>
                                            <div>
                                                <span class="font-semibold leading-tight text-xs">100%</span>
                                            </div>
                                        </div>
                                        <div
                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100"
                                                class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                role="progressbar"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img alt="spotify"
                                                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                src="{{ asset('img/small-logos/logo-spotify.svg') }}" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Launch our Mobile App</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="mt-2 avatar-group">
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="user1" class="w-full rounded-full"
                                                src="{{ asset('img/team-4.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Ryan Tompson
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="user2" class="w-full rounded-full"
                                                src="{{ asset('img/team-3.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Romina Hadid
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="user3" class="w-full rounded-full"
                                                src="{{ asset('img/team-4.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Alexander Smith
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="user4" class="w-full rounded-full"
                                                src="{{ asset('img/team-1.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Jessica Doe
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> $20,500 </span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="w-3/4 mx-auto">
                                        <div>
                                            <div>
                                                <span class="font-semibold leading-tight text-xs">100%</span>
                                            </div>
                                        </div>
                                        <div
                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100"
                                                class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                role="progressbar"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img alt="jira"
                                                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                src="{{ asset('img/small-logos/logo-jira.svg') }}" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Add the New Pricing Page</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="mt-2 avatar-group">
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="user5" class="w-full rounded-full"
                                                src="{{ asset('img/team-4.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Ryan Tompson
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> $500 </span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="w-3/4 mx-auto">
                                        <div>
                                            <div>
                                                <span class="font-semibold leading-tight text-xs">25%</span>
                                            </div>
                                        </div>
                                        <div
                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                            <div aria-valuemax="25" aria-valuemin="0" aria-valuenow="25"
                                                class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                role="progressbar"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img alt="invision"
                                                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                src="{{ asset('img/small-logos/logo-invision.svg') }}" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">Redesign New Online Shop</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="mt-2 avatar-group">
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="user6" class="w-full rounded-full"
                                                src="{{ asset('img/team-1.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Ryan Tompson
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                        <a class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                            data-placement="bottom" data-target="tooltip_trigger"
                                            href="javascript:;">
                                            <img alt="user7" class="w-full rounded-full"
                                                src="{{ asset('img/team-4.jpg') }}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                            data-target="tooltip" role="tooltip">
                                            Jessica Doe
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                data-popper-arrow></div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-0 text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> $2,000 </span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="w-3/4 mx-auto">
                                        <div>
                                            <div>
                                                <span class="font-semibold leading-tight text-xs">40%</span>
                                            </div>
                                        </div>
                                        <div
                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                            <div aria-valuemax="40" aria-valuemin="0" aria-valuenow="40"
                                                class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                role="progressbar"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </x-table.index>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <h6>Orders overview</h6>
                    <p class="leading-normal text-sm">
                        <i class="fa fa-arrow-up text-lime-500"></i>
                        <span class="font-semibold">24%</span> this month
                    </p>
                </div>
                <div class="flex-auto p-4">
                    <div
                        class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">$2400, Design
                                        changes</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">22 DEC 7:20
                                        PM
                                    </p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
