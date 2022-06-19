@extends('layouts.app')
@section('content')
    <div class="container-fluid min-vh-100">
        <div class="row mt-5">
            <div class="col-lg-8">
                <div id="ticket-container"
                     class="d-flex justify-content-lg-evenly flex-row flex-wrap gap-4 ticket-container">
                    <div class="d-flex justify-content-center align-items-center rounded flex-wrap mt-5">
                        <div class="bg-dark p-5 cruiseList" style="border-radius: 5px 0 0 5px;">
                            <p class="fs-5 p-1 px-5 bg-light rounded fc-black" id="cruiseId"
                               data-cruise-id="{{$cruise->id}}">Информация о рейсе:</p>
                            <li class="fs-5 p-1 fc-white">Точка отправления: {{$cruise->route->departurePoint}}</li>
                            <li class="fs-5 p-1 fc-white">Дата
                                отправления: {{date('d.m.Y', strtotime($cruise->departureDate))}}</li>
                            <li class="fs-5 p-1 fc-white">Время отправления: {{ $cruise->departureTime }}</li>
                            <li class="fs-5 p-1 fc-white">Пункт
                                прибытия: {{$cruise->route->destination->destination}}</li>
                            <li class="fs-5 p-1 fc-white">Время
                                прибытия: {{date('d.m.Y', strtotime($cruise->arrivalDate)) }}</li>
                            <li class="fs-5 p-1 fc-white">Время в пути: {{$cruise->arrivalTime}}</li>
                            <li class="fs-5 p-1 fc-white">Цена билета: <a id="ticketPrice">{{$cruise->ticketPrice}}</a>
                            </li>
                            <li class="fs-5 p-1 fc-white">Номер автобуса: {{$cruise->bus->busRegNum}}</li>
                        </div>
                        <div class="p-5 shadow-lg rounded-3" style="border: 4px solid #333333">
                            <form method="post" action="{{ route('createOrder') }}"
                                  class=" p-2 d-flex align-items-center flex-column rounded ticket-form">
                                @csrf
                                <span class="fs-4">Введите ваше имя:</span>
                                <input class="rounded border-color p-1 w-100" type="text" name="name" style="border: 3px solid #333333" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите вашу фамилию:</span>
                                <input class="rounded border-color p-1 w-100" type="text" name="surname" style="border: 3px solid #333333" required>
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите номер телефона:</span>
                                <input class="rounded border-color p-1 w-100 tel" type="tel" name="phone_number" id="phone" style="border: 3px solid #333333" required>
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите ваш email:</span>
                                <input class="rounded border-color p-1 w-100" type="email" name="email" id="email" style="border: 3px solid #333333" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите серию и номер паспорта:</span>
                                <input class="rounded border-color p-1 w-100 passport" type="text" name="passport" id="passport" style="border: 3px solid #333333" required>
                                @error('passport')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите место выдачи паспорта:</span>
                                <input class="rounded border-color p-1 w-100" type="text" name="whereIssued" id="whereIssued" style="border: 3px solid #333333" required>
                                @error('whereIssued')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите вашу дату рождения:</span>
                                <input class="rounded border-color p-2 w-100" type="date" name="date" id="date" style="border: 3px solid #333333" required>
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
{{--                <form action="{{route('createOrder')}}" method="post">--}}
{{--                    @csrf--}}
{{--                    <input type="text" name="test">--}}
{{--                    <button type="submit">Добавить</button>--}}
{{--                </form>--}}
                <div class="total-bar shadow mt-5 p-2" style="margin-right: 20px;">
                    <h2 class="text-center">Заказ</h2>
                    <hr style="height: 4px; color: black;">
                    <div class="d-flex flex-row justify-content-between ">
                        <h4>Итог</h4>
                        <h4>Цена: <a id="totalPrice">{{$cruise->ticketPrice}}</a></h4>
                    </div>
                    <hr style="height: 4px; color: black;">
                    <div class="d-flex justify-content-between flex-row book">
                        <button id="bookButton" class="btn btn-outline-dark w-100 mx-1 rounded fw-bold">Забронировать
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-column align-items-center" style="background: #333333; margin-right: 20px">
                    <p class="fs-4 text-center fw-bold mt-3" style="background:#f3f0f0; padding: 3px; border-radius: 3px">Выбор мест:</p>
                    <div class="d-flex justify-content-evenly align-items-center flex-wrap" style="width: 300px;"
                         id="placesContainer">
                        {{--                                    //TicketContainer--}}
                    </div>
                    <button class="btn btn-outline-light rounded fw-bold mt-3 ticketAdd m-2" style="width: 300px">Добавить новый
                        билет
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jQuery Mask Plugin -->
    <script src="{{asset('/js/jquery.maskedinput.js')}}"></script>
    <script src="{{asset('/js/postData.js')}}"></script>
    <script>
        let addButton = document.querySelectorAll('#ticketAdd');
        let bookButton = document.querySelector('#bookButton');
        let cruiseId = document.querySelector('#cruiseId');
        let cruiseIdValue = cruiseId.dataset.cruiseId;
        let cost = document.querySelector('#ticketPrice').innerHTML.valueOf();
        let formCount = 1;
        let cbArr = []; //Выбранные чб
        async function getFreeCruisePlaces(id) {
            let response = await fetch(`/cruise-places/${id}`);
            let data = await response.json();
            return data;
        }

        async function drawPlaces(id) {
            const placesContainer = document.querySelector("#placesContainer")
            let places = Object.values(await getFreeCruisePlaces(id));

            placesContainer.innerHTML = ''
            places.forEach((item) => {
                let itemCb = `
                                <div class="checkbox__container">
                                         <label class="checkbox__label">
                                        <input type="checkbox" class="checkbox" name="place" value="${item}">
                                        <span class="fake fakeclass"></span>
                                        <p class="checkbox__text text-center fc-white fs-5">${item}</p>
                                        </label>
                                </div>`;
                placesContainer.insertAdjacentHTML('beforeend', itemCb);
            })

            const cbs = document.querySelectorAll(".checkbox")

            cbs.forEach((item) => {
                item.addEventListener('click', (e) => {
                    if (cbArr.includes(item.value)) {
                        let index = cbArr.indexOf(item.value)
                        cbArr.splice(index, 1);
                        console.log(cbArr)
                    } else {
                        cbArr.push(item.value)
                        console.log('push=',cbArr)
                    }
                    blockInput()
                })
            });

        }

        drawPlaces(cruiseId.dataset.cruiseId)

        function createTemplate() {
            const template = `
                    <div class="d-flex justify-content-center align-items-center rounded flex-wrap mt-5">
                        <div class="bg-dark p-5 cruiseList" style="border-radius: 5px 0 0 5px;">
                            <p class="fs-5 p-1 px-5 bg-light rounded fc-black" id="cruiseId"
                               data-cruise-id="{{$cruise->id}}">Информация о рейсе:</p>
                            <li class="fs-5 p-1 fc-white">Точка отправления: {{$cruise->route->departurePoint}}</li>
                            <li class="fs-5 p-1 fc-white">Дата
                                отправления: {{date('d.m.Y', strtotime($cruise->departureDate))}}</li>
                            <li class="fs-5 p-1 fc-white">Время отправления: {{ $cruise->departureTime }}</li>
                            <li class="fs-5 p-1 fc-white">Пункт
                                прибытия: {{$cruise->route->destination->destination}}</li>
                            <li class="fs-5 p-1 fc-white">Время
                                прибытия: {{date('d.m.Y', strtotime($cruise->arrivalDate)) }}</li>
                            <li class="fs-5 p-1 fc-white">Время в пути: {{$cruise->arrivalTime}}</li>
                            <li class="fs-5 p-1 fc-white">Цена билета: <a id="ticketPrice">{{$cruise->ticketPrice}}</a>
                            </li>
                            <li class="fs-5 p-1 fc-white">Номер автобуса: {{$cruise->bus->busRegNum}}</li>
                        </div>
                        <div class="p-5 shadow-lg rounded-3" style="border: 4px solid #333333">
                            <form method="post" action="{{ route('orderStore', $cruise) }}"
                                  class=" p-2 d-flex align-items-center flex-column rounded ticket-form">
                                @csrf
            <span class="fs-4">Введите ваше имя:</span>
            <input class="rounded border-color p-1 w-100" type="text" name="name" style="border: 3px solid #333333" required>
@error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="fs-4">Введите вашу фамилию:</span>
            <input class="rounded border-color p-1 w-100" type="text" name="surname" style="border: 3px solid #333333" required>
@error('surname')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="fs-4">Введите номер телефона:</span>
            <input class="rounded border-color p-1 w-100 tel" type="tel" name="phone_number" id="phone" style="border: 3px solid #333333" required>
@error('phone_number')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="fs-4">Введите ваш email:</span>
            <input class="rounded border-color p-1 w-100" type="email" name="email" id="email" style="border: 3px solid #333333" required>
@error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="fs-4">Введите серию и номер паспорта:</span>
            <input class="rounded border-color p-1 w-100 passport" type="text" name="passport" id="passport" style="border: 3px solid #333333" required>
@error('passport')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="fs-4">Введите место выдачи паспорта:</span>
            <input class="rounded border-color p-1 w-100" type="text" name="whereIssued" id="whereIssued" style="border: 3px solid #333333" required>
@error('whereIssued')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="fs-4">Введите вашу дату рождения:</span>
            <input class="rounded border-color p-2 w-100" type="date" name="date" id="date" style="border: 3px solid #333333" required>
@error('date')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </form>
        </div>
    </div>
</div>`;
            let container = document.querySelector('.ticket-container');
            container.insertAdjacentHTML("beforeend", template);
            getTotalPrice();
            unblockInput();
            ticketPrice();
            telMask();
        }

        function getAge(dateOfBirth) {
            const now = new Date(); //Текущя дата
            const today = new Date(now.getFullYear(), now.getMonth(), now.getDate()); //Текущя дата без времени
            const dob = new Date(dateOfBirth); //Дата рождения
            const dobnow = new Date(today.getFullYear(), dob.getMonth(), dob.getDate()); //ДР в текущем году
            let age; //Возраст

            //Возраст = текущий год - год рождения
            age = today.getFullYear() - dob.getFullYear();
            //Если ДР в этом году ещё предстоит, то вычитаем из age один год
            if (today < dobnow) {
                age = age - 1;
            }


            return age;
        }

        function removeForm(target) {
            target.closest('.ticketForm').remove();
            getTotalPrice()
            clearInput();
            formCount--;
        }

        function blockInput() {
            let cb = document.querySelectorAll('.checkbox');
            console.log(formCount, cbArr.length)
            if (formCount === cbArr.length) {
                cb.forEach((item) => {
                    if (!item.checked) {
                        item.setAttribute('disabled', 'disabled');
                    }
                })
            } else {
                unblockInput()
            }
        }

        //Создаю форму - разблок чеки
        function unblockInput() {
            let cb = document.querySelectorAll('.checkbox');
            cb.forEach((item) => {
                item.removeAttribute('disabled');
            })
        }

        //Удаляю - чищу
        function clearInput() {
            let cb = document.querySelectorAll('.checkbox');
            cb.forEach((item) => {
                item.checked = false;
                item.removeAttribute('disabled');
            })
        }


        function getFormData(array) {
            let dataArr = [];
            let placeArr = [];
            array.forEach((item, index) => {
                const name = item.querySelector('[name="name"]'),
                    surname = item.querySelector('[name="surname"]'),
                    phone_number = item.querySelector('[name="phone_number"]'),
                    email = item.querySelector('[name="email"]'),
                    dateOfBirth = item.querySelector('[name="date"]'),
                    passport = item.querySelector('[name="passport"]'),
                    whereIssued = item.querySelector('[name="whereIssued"]');
                console.log(passport.value)
                const values = {
                    name: name.value,
                    surname: surname.value,
                    email: email.value,
                    phone_number: phone_number.value,
                    passport: passport.value,
                    whereIssued: whereIssued.value,
                    dateOfBirth: dateOfBirth.value.toLocaleString('en-US'),
                    place: cbArr,
                    cost: getAge(dateOfBirth.value) < 18 ? (cost * 0.9).toString() : cost,
                }
                dataArr.push(values);
            })
            return dataArr
        }


        window.addEventListener('click', (e) => {
            if (e.target.classList.contains('ticketAdd')) {
                e.preventDefault();
                formCount++
                console.log(formCount)
                createTemplate();
            }
        });

        async function sendData(dataArr){
            await postDataJS('{{route('createOrder')}}', dataArr, '{{csrf_token()}}')
        }


        bookButton.addEventListener('click', (e) => {
            e.preventDefault();
            let formArr = document.querySelectorAll('.ticket-form');
            let dataForm = getFormData(formArr);

            let err = document.querySelector('.book');
            let elem = document.createElement('p');
            elem.classList.add('error','mt-2','fw-bold');
            elem.innerHTML = "Ошибка! Выберите место!"


            if(formCount !== cbArr.length){
                err.insertAdjacentElement("afterend",elem);
            }
            else{
                sendData(dataForm);
            }
        });


        function getTotalPrice() {
            const ticketPrice = document.querySelectorAll('#ticketPrice');
            const totalField = document.querySelector('#totalPrice')
            let amount = 0;
            ticketPrice.forEach((item) => {
                let price = parseInt(item.innerHTML);
                amount += price;
            })
            totalField.innerHTML = amount;
        }

        function ticketPrice() {
            const dateInput = document.querySelectorAll('#date')
            const ticketPrice = document.querySelectorAll('#ticketPrice');
            const soloTicket = document.querySelector('#ticketPrice');
            dateInput.forEach((item, index) => {
                let cost = soloTicket.innerHTML;
                console.log('COST', cost)
                item.addEventListener('change', (e) => {
                    let age = getAge(e.target.value)
                    if (age < 18) {
                        ticketPrice.forEach((ticket, ticketIndex) => {
                            if (index === ticketIndex) {
                                //Баг с созданием билетов и указанием цены после
                                let value = ticket.innerHTML;
                                ticket.innerHTML = value * 0.9
                            }
                        })
                    } else {
                        ticketPrice.forEach((ticket, ticketIndex) => {
                            if (index === ticketIndex) {
                                ticket.innerHTML = cost
                            }
                        })
                    }
                    getTotalPrice()
                })
            })

        }

        function telMask(){
            [].forEach.call( document.querySelectorAll('.tel'), function(input) {
                var keyCode;
                function mask(event) {
                    event.keyCode && (keyCode = event.keyCode);
                    var pos = this.selectionStart;
                    if (pos < 3) event.preventDefault();
                    var matrix = "+7 (___) ___ ____",
                        i = 0,
                        def = matrix.replace(/\D/g, ""),
                        val = this.value.replace(/\D/g, ""),
                        new_value = matrix.replace(/[_\d]/g, function(a) {
                            return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                        });
                    i = new_value.indexOf("_");
                    if (i != -1) {
                        i < 5 && (i = 3);
                        new_value = new_value.slice(0, i)
                    }
                    var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                        function(a) {
                            return "\\d{1," + a.length + "}"
                        }).replace(/[+()]/g, "\\$&");
                    reg = new RegExp("^" + reg + "$");
                    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                    if (event.type == "blur" && this.value.length < 5)  this.value = ""
                }

                input.addEventListener("input", mask, false);
                input.addEventListener("focus", mask, false);
                input.addEventListener("blur", mask, false);
                input.addEventListener("keydown", mask, false)

                $('.passport').mask('99-99 999999');

            });
        }



        telMask();
        ticketPrice()
    </script>

@endsection
