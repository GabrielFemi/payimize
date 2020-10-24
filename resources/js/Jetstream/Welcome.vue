<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                Welcome to Payimize
            </div>

            <div class="mt-6 text-gray-500">
                Payimize provides a beautiful, secure and intuitive payment experience for all your school needs.
            </div>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <img style="width: 24px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjA0NCA1MTIuMDQ0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDQ0IDUxMi4wNDQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDU4LjY2NywwLjAyMkg1My4zMzNDMjMuODkzLDAuMDU3LDAuMDM1LDIzLjkxNSwwLDUzLjM1NXY3NC42NjdoMjEuMzMzVjUzLjM1NWMwLTE3LjY3MywxNC4zMjctMzIsMzItMzJoNDA1LjMzMw0KCQkJYzE3LjY3MywwLDMyLDE0LjMyNywzMiwzMnYyMzQuNjY3SDUxMlY1My4zNTVDNTExLjk2NSwyMy45MTUsNDg4LjEwNywwLjA1Nyw0NTguNjY3LDAuMDIyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDkwLjY2Nyw0MDUuMzU1djUzLjMzM2MwLDE3LjY3My0xNC4zMjcsMzItMzIsMzJINTMuMzMzYy0xNy42NzMsMC0zMi0xNC4zMjctMzItMzJ2LTUzLjMzM0gwdjUzLjMzMw0KCQkJYzAuMDM1LDI5LjQ0MSwyMy44OTMsNTMuMjk4LDUzLjMzMyw1My4zMzNoNDA1LjMzM2MyOS40NDEtMC4wMzUsNTMuMjk4LTIzLjg5Myw1My4zMzMtNTMuMzMzdi01My4zMzNINDkwLjY2N3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iNDIuNjY3IiB5PSI4NS4zNTUiIHdpZHRoPSI0MjYuNjY3IiBoZWlnaHQ9IjIxLjMzMyIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSI1My4zMzMiIHk9IjQyLjY4OSIgd2lkdGg9IjIxLjMzMyIgaGVpZ2h0PSIyMS4zMzMiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iOTYiIHk9IjQyLjY4OSIgd2lkdGg9IjIxLjMzMyIgaGVpZ2h0PSIyMS4zMzMiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iNDM3LjMzMyIgeT0iNDIuNjg5IiB3aWR0aD0iMjEuMzMzIiBoZWlnaHQ9IjIxLjMzMyIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTEwLjQyMSwzNTcuMDM1bC01My4zMzMtODUuMzMzYy0wLjczMi0xLjAzOC0xLjYzNy0xLjk0My0yLjY3NS0yLjY3NWMtNS4wMDctMy41My0xMS45MjgtMi4zMzMtMTUuNDU5LDIuNjc1DQoJCQlsLTUzLjMzMyw4NS4zMzNjLTEuMDYsMS42OTUtMS42MjEsMy42NTQtMS42MjEsNS42NTNjMCw1Ljg5MSw0Ljc3NiwxMC42NjcsMTAuNjY3LDEwLjY2N0g0MTZ2NTMuMzMzDQoJCQljMCw1Ljg5MSw0Ljc3NiwxMC42NjcsMTAuNjY3LDEwLjY2N2g0Mi42NjdjNS44OTEsMCwxMC42NjctNC43NzYsMTAuNjY3LTEwLjY2N3YtNTMuMzMzaDIxLjMzMw0KCQkJYzIuMDE0LDAuMDA4LDMuOTg5LTAuNTU0LDUuNjk2LTEuNjIxQzUxMi4wMjUsMzY4LjYxMiw1MTMuNTQ0LDM2Mi4wMzEsNTEwLjQyMSwzNTcuMDM1eiBNNDY5LjMzMywzNTIuMDIyDQoJCQljLTUuODkxLDAtMTAuNjY3LDQuNzc2LTEwLjY2NywxMC42Njd2NTMuMzMzaC0yMS4zMzN2LTUzLjMzM2MwLTUuODkxLTQuNzc2LTEwLjY2Ny0xMC42NjctMTAuNjY3aC0xMi44TDQ0OCwyOTcuNDgzDQoJCQlsMzQuMTMzLDU0LjUzOUg0NjkuMzMzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzk0LjY2NywxNDkuMzU1SDUzLjMzM0MyMy44OTMsMTQ5LjM5MSwwLjAzNSwxNzMuMjQ4LDAsMjAyLjY4OXYxMjhjMC4wMzUsMjkuNDQxLDIzLjg5Myw1My4yOTgsNTMuMzMzLDUzLjMzM2gzMDkuMzMzDQoJCQl2LTIxLjMzM0g1My4zMzNjLTE3LjY3MywwLTMyLTE0LjMyNy0zMi0zMnYtMTI4YzAtMTcuNjczLDE0LjMyNy0zMiwzMi0zMmgzNDEuMzMzYzE3LjY3MywwLDMyLDE0LjMyNywzMiwzMnY0Mi42NjdINDQ4di00Mi42NjcNCgkJCUM0NDcuOTY1LDE3My4yNDgsNDI0LjEwNywxNDkuMzkxLDM5NC42NjcsMTQ5LjM1NXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTIzNC42NjcsMjAyLjY4OUgxOTJjLTE3LjY3MywwLTMyLDE0LjMyNy0zMiwzMnY5NmgyMS4zMzN2LTk2YzAtNS44OTEsNC43NzYtMTAuNjY3LDEwLjY2Ny0xMC42NjdoNDIuNjY3DQoJCQljNS44OTEsMCwxMC42NjcsNC43NzYsMTAuNjY3LDEwLjY2N3Y5NmgyMS4zMzN2LTk2QzI2Ni42NjcsMjE3LjAxNiwyNTIuMzQsMjAyLjY4OSwyMzQuNjY3LDIwMi42ODl6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjE3MC42NjciIHk9IjI1Ni4wMjIiIHdpZHRoPSI4NS4zMzMiIGhlaWdodD0iMjEuMzMzIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0xMTcuMzMzLDIwMi42ODlINjRjLTUuODkxLDAtMTAuNjY3LDQuNzc2LTEwLjY2NywxMC42Njd2MTE3LjMzM2gyMS4zMzN2LTQyLjY2N2g0Mi42NjdjMC4yOTUsMC4wMDYsMC41ODksMC4wMDYsMC44ODQsMA0KCQkJYzExLjUzOC0wLjI0NCwyMC42OTMtOS43OTUsMjAuNDQ5LTIxLjMzM3YtNDIuNjY3YzAuMDA2LTAuMjk1LDAuMDA2LTAuNTg5LDAtMC44ODQNCgkJCUMxMzguNDIzLDIxMS42LDEyOC44NzEsMjAyLjQ0NSwxMTcuMzMzLDIwMi42ODl6IE0xMTcuMzMzLDI2Ni42ODlINzQuNjY3di00Mi42NjdoNDIuNjY3VjI2Ni42ODl6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zNzMuMzMzLDIwMi42ODl2NTMuMzMzYzAsNS44OTEtNC43NzYsMTAuNjY3LTEwLjY2NywxMC42NjdIMzIwYy01Ljg5MSwwLTEwLjY2Ny00Ljc3Ni0xMC42NjctMTAuNjY3di01My4zMzNIMjg4djUzLjMzMw0KCQkJYzAsMTcuNjczLDE0LjMyNywzMiwzMiwzMmg0Mi42NjdjMTcuNjczLDAsMzItMTQuMzI3LDMyLTMydi01My4zMzNIMzczLjMzM3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iMzMwLjY2NyIgeT0iMjc3LjM1NSIgd2lkdGg9IjIxLjMzMyIgaGVpZ2h0PSI1My4zMzMiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">Make a transaction 😍😍😍</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        Make payments in a secure, beautiful and intuitive interface.
                    </div>

                    <inertia-link href="/transactions/create">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Continue</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </inertia-link>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                <div class="flex items-center">.
                    <img class="transactions-icon" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ4MHB0IiB2aWV3Qm94PSItMTYgMCA0ODAgNDgwIiB3aWR0aD0iNDgwcHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ0MCAyMjRoLTcydi0xODRjLS4wMjczNDQtMjIuMDgyMDMxLTE3LjkxNzk2OS0zOS45NzI2NTYyLTQwLTQwaC0yNjRjLTE3LjY3MTg3NSAwLTMyIDE0LjMyODEyNS0zMiAzMnY5NmgtMjRjLTQuNDE3OTY5IDAtOCAzLjU4MjAzMS04IDh2NDhjMCA0LjQxNzk2OSAzLjU4MjAzMSA4IDggOGgyNHY4OGMwIDQuNDE3OTY5IDMuNTgyMDMxIDggOCA4aDQwdjE2MGMwIDE3LjY3MTg3NSAxNC4zMjgxMjUgMzIgMzIgMzJoMjY0YzE3LjY3MTg3NSAwIDMyLTE0LjMyODEyNSAzMi0zMnMtMTQuMzI4MTI1LTMyLTMyLTMyaC04di0xMjhoNzJjNC40MTc5NjkgMCA4LTMuNTgyMDMxIDgtOHYtNDhjMC00LjQxNzk2OS0zLjU4MjAzMS04LTgtOHptLTM5Mi0xOTJjMC04LjgzNTkzOCA3LjE2NDA2Mi0xNiAxNi0xNnMxNiA3LjE2NDA2MiAxNiAxNnY5NmgtMzJ6bS0zMiAxMTJoMjI0YzQuMDIzNDM4IDAgNy40MjE4NzUtMi45ODQzNzUgNy45Mzc1LTYuOTc2NTYybDI3LjU2NjQwNiAyMi45NzY1NjItMjcuNTY2NDA2IDIyLjk3NjU2MmMtLjUxNTYyNS0zLjk5MjE4Ny0zLjkxNDA2Mi02Ljk3NjU2Mi03LjkzNzUtNi45NzY1NjJoLTIyNHptMzIgMTI4di04MGgzMnY4MHptMzQ0IDE3NmMwIDguODM1OTM4LTcuMTY0MDYyIDE2LTE2IDE2aC0yMzYuMjk2ODc1YzIuODI0MjE5LTQuODU5Mzc1IDQuMzA0Njg3LTEwLjM3ODkwNiA0LjI5Njg3NS0xNnYtMTZoMjMyYzguODM1OTM4IDAgMTYgNy4xNjQwNjIgMTYgMTZ6bS00MC0zMmgtMjE2Yy00LjQxNzk2OSAwLTggMy41ODIwMzEtOCA4djI0YzAgOC44MzU5MzgtNy4xNjQwNjIgMTYtMTYgMTZzLTE2LTcuMTY0MDYyLTE2LTE2di0yNTZoMTM2djhjMCAzLjEwNTQ2OSAxLjc5Njg3NSA1LjkzMzU5NCA0LjYwOTM3NSA3LjI1czYuMTMyODEzLjg4NjcxOSA4LjUxOTUzMS0xLjEwNTQ2OWw0OC00MGMxLjgyMDMxMy0xLjUxOTUzMSAyLjg3NS0zLjc2OTUzMSAyLjg3NS02LjE0NDUzMXMtMS4wNTQ2ODctNC42MjUtMi44NzUtNi4xNDQ1MzFsLTQ4LTQwYy0yLjM4NjcxOC0xLjk5MjE4OC01LjcwNzAzMS0yLjQyMTg3NS04LjUxOTUzMS0xLjEwNTQ2OXMtNC42MDkzNzUgNC4xNDQ1MzEtNC42MDkzNzUgNy4yNXY4aC0xMzZ2LTk2Yy0uMDI3MzQ0LTUuNjMyODEyLTEuNTU4NTk0LTExLjE1NjI1LTQuNDMzNTk0LTE2aDIzNi40MzM1OTRjMTMuMjUzOTA2IDAgMjQgMTAuNzQ2MDk0IDI0IDI0djE4NGgtMTM2di04YzAtMy4xMDU0NjktMS43OTY4NzUtNS45MzM1OTQtNC42MDkzNzUtNy4yNXMtNi4xMzI4MTMtLjg4NjcxOS04LjUxOTUzMSAxLjEwNTQ2OWwtNDggNDBjLTEuODIwMzEzIDEuNTE5NTMxLTIuODc1IDMuNzY5NTMxLTIuODc1IDYuMTQ0NTMxczEuMDU0Njg3IDQuNjI1IDIuODc1IDYuMTQ0NTMxbDQ4IDQwYzIuMzg2NzE4IDEuOTkyMTg4IDUuNzA3MDMxIDIuNDIxODc1IDguNTE5NTMxIDEuMTA1NDY5czQuNjA5Mzc1LTQuMTQ0NTMxIDQuNjA5Mzc1LTcuMjV2LThoMTM2em04MC0xNDRoLTIyNGMtMS4wMzEyNS4wMDM5MDYtMi4wNTA3ODEuMjEwOTM4LTMgLjYwOTM3NS0uMjkyOTY5LjE1MjM0NC0uNTc0MjE5LjMyNDIxOS0uODQ3NjU2LjUxMTcxOS0uNTc0MjE5LjI5Njg3NS0xLjExMzI4Mi42NjAxNTYtMS42MDE1NjMgMS4wODU5MzctLjI1NzgxMi4yODkwNjMtLjQ5NjA5My41OTM3NS0uNzEwOTM3LjkxNDA2My0uMzkwNjI1LjQ0OTIxOC0uNzIyNjU2Ljk0MTQwNi0xIDEuNDcyNjU2LS4xNTYyNS4zNzUtLjI3NzM0NC43NjU2MjUtLjM2NzE4OCAxLjE2Nzk2OS0uMTY3OTY4LjM5MDYyNS0uMzAwNzgxLjc5Njg3NS0uMzk0NTMxIDEuMjE0ODQzbC0yNy41ODIwMzEtMjIuOTc2NTYyIDI3LjU2NjQwNi0yMi45NzY1NjJjLjA5Mzc1LjQxNzk2OC4yMjY1NjIuODI0MjE4LjM5NDUzMSAxLjIxNDg0My4wODU5MzguNDAyMzQ0LjIxMDkzOC43OTI5NjkuMzY3MTg4IDEuMTY3OTY5LjI3MzQzNy41MzEyNS42MDkzNzUgMS4wMjM0MzggMSAxLjQ3MjY1Ni4yMTQ4NDMuMzIwMzEzLjQ1MzEyNS42MjUuNzEwOTM3LjkxNDA2My40ODgyODIuNDI1NzgxIDEuMDI3MzQ0Ljc4OTA2MiAxLjYwMTU2MyAxLjA4NTkzNy4yNzM0MzcuMTg3NS41NTQ2ODcuMzU5Mzc1Ljg0NzY1Ni41MTE3MTkuOTUzMTI1LjQwMjM0NCAxLjk4MDQ2OS42MDkzNzUgMy4wMTU2MjUuNjA5Mzc1aDIyNHptMCAwIi8+PHBhdGggZD0ibTEyOCA0OGg4MHYxNmgtODB6bTAgMCIvPjxwYXRoIGQ9Im0xMjggODBoODB2MTZoLTgwem0wIDAiLz48cGF0aCBkPSJtMTYwIDM1MmgxNjB2MTZoLTE2MHptMCAwIi8+PHBhdGggZD0ibTE2MCAzODRoMTYwdjE2aC0xNjB6bTAgMCIvPjxwYXRoIGQ9Im0yNzIgMzIwaDQ4djE2aC00OHptMCAwIi8+PC9zdmc+" />
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laracasts.com">Transactions and logs 🔥🔥🔥</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        Check out all your previous transactions in an exquisite way.
                    </div>

                    <inertia-link href="/transactions">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>View your past transactions.</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </inertia-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
    }
</script>
