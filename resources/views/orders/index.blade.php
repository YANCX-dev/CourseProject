@extends('layouts.app')
@section('content')
    <div class="container-fluid min-vh-100">
        <div class="row">
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
                        <div class="admin-el-color p-5 rounded-3">
                            <form method="post" action="{{ route('orderStore', $cruise) }}"
                                  class=" p-2 d-flex align-items-center flex-column rounded ticket-form">
                                @csrf
                                <span class="fs-4">Введите ваше имя:</span>
                                <input class="rounded border-color w-100" type="text" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите вашу фамилию:</span>
                                <input class="rounded border-color w-100" type="text" name="surname">
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите номер телефона:</span>
                                <input class="rounded border-color w-100" type="tel" name="phone_number" id="phone">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите ваш email:</span>
                                <input class="rounded border-color w-100" type="email" name="email" id="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите серию и номер паспорта:</span>
                                <input class="rounded border-color w-100" type="text" name="passport" id="passport">
                                @error('passport')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="fs-4">Введите вашу дату рождения:</span>
                                <input class="rounded border-color w-100" type="date" name="date" id="date">
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-outline-dark rounded fw-bold mt-3 w-100 ticketAdd">Добавить билет</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="total-bar admin-el-color mt-5 p-3">
                    <h2 class="text-center">Заказ</h2>
                    <hr style="height: 4px; color: black;">
                    <div class="d-flex flex-row justify-content-between ">
                        <h4>Итог</h4>
                        <h4>Цена: <a id="totalPrice">{{$cruise->ticketPrice}}</a></h4>
                    </div>
                    <hr style="height: 4px; color: black;">
                    <div class="d-flex justify-content-between flex-row">
                        <button id="bookButton" class="btn btn-outline-dark w-100 mx-1 rounded fw-bold">Забронировать
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center admin-el-color flex-column align-items-center">
                    <p class="fs-4 text-center">Выбер мест:</p>
                    <div class="d-flex justify-content-evenly align-items-center flex-wrap" style="width: 300px;"
                         id="placesContainer">
                        {{--                                    //TicketContainer--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script>
        let addButton = document.querySelectorAll('#ticketAdd');
        let bookButton = document.querySelector('#bookButton');
        const cruiseId = document.querySelector('#cruiseId');
        let cost = document.querySelector('#ticketPrice').innerHTML.valueOf();
        let formCount = 1;

        async function getFreeCruisePlaces(id) {
            let response = await fetch(`/cruise-places/${id}`);
            let data = await response.json();

            return data;
        }

        function addPlaceTo(placesArr) {
            let cruiseList = document.querySelector(".cruiseList");
            const li = document.createElement('li');
            li.classList.add("fs-5", "p-1", "fc-white");
            placesArr.forEach((item) => {
                li.innerHTML = `Место: ${item}`;
                cruiseList.append(li);
            })


        }

        // function deletePlace(){
        //     let addedPlace = document.querySelectorAll('.addedPlace');
        //     let pickedPlace = document.querySelectorAll('.pickedPlace');
        //     console.log(pickedPlace)
        //     // console.log(addedPlace)
        //     addedPlace.forEach((item)=>{
        //         console.log(item.value)
        //     })
        // }

        function drawPlaces(id) {
            const placesContainer = document.querySelectorAll("#placesContainer")
            let places = getFreeCruisePlaces(id);
            places.then(function (value) {
                //Рендер мест
                let places = Object.values(value);
                places.forEach((item) => {
                    placesContainer.forEach((container) => {
                        container.innerHTML += `
                                <div class="checkbox__container">
                                         <label class="checkbox__label">
                                        <input type="checkbox" class="checkbox" name="place" value="${item}">
                                        <span class="fake fakeclass"></span>
                                        <p class="checkbox__text text-center">${item}</p>
                                        </label>
                                </div>`

                    })

                })

                let cbArr = []; //Выбранные чб
                let spanFake = document.querySelectorAll('.fakeclass');
                const cb = document.querySelectorAll(".checkbox")
                cb.forEach((item) => {
                    item.addEventListener('click', (e) => {
                        if (cbArr.includes(item.value)) {
                            let index = cbArr.indexOf(item.value)
                            cbArr.splice(index, 1);
                            console.log(cbArr)

                        } else {
                            cbArr.push(item.value)
                            console.log(cbArr)
                        }


                    })
                });


            })

        }
        drawPlaces(cruiseId.dataset.cruiseId)

        function createTemplate() {
            const template = `<div class="d-flex justify-content-center align-items-center rounded flex-wrap ticketForm mt-5">
        <div class="bg-dark p-5" style="border-radius: 5px 0 0 5px;">
            <p class="fs-5 p-1 px-5 bg-light rounded fc-black" id="cruiseId" data-cruise-id="{{$cruise->id}}">Информация о рейсе:</p>
            <li class="fs-5 p-1 fc-white">Точка отправления: {{$cruise->route->departurePoint}}</li>
            <li class="fs-5 p-1 fc-white">Дата
                отправления: {{date('d.m.Y', strtotime($cruise->departureDate))}}</li>
            <li class="fs-5 p-1 fc-white">Время отправления: {{ $cruise->departureTime }}</li>
            <li class="fs-5 p-1 fc-white">Пункт
                прибытия: {{$cruise->route->destination->destination}}</li>
            <li class="fs-5 p-1 fc-white">Время
                прибытия: {{date('d.m.Y', strtotime($cruise->arrivalDate)) }}</li>
            <li class="fs-5 p-1 fc-white">Время в пути: {{$cruise->arrivalTime}}</li>
            <li class="fs-5 p-1 fc-white">Цена билета: <a id="ticketPrice">{{$cruise->ticketPrice}}</a> </li>
            <li class="fs-5 p-1 fc-white">Номер автобуса: {{$cruise->bus->busRegNum}}</li>
        </div>
        <div class="admin-el-color p-5 rounded-3">
            <form method="post" action="{{ route('orderStore', $cruise) }}"
                  class=" p-2 d-flex align-items-center flex-column rounded ticket-form">
                @csrf
            <span class="fs-4">Введите ваше имя:</span>
            <input class="rounded border-color w-100" type="text" name="name">
@error('name')
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            <span class="fs-4">Введите вашу фамилию:</span>
            <input class="rounded border-color w-100" type="text" name="surname">
@error('surname')
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            <span class="fs-4">Введите номер телефона:</span>
            <input class="rounded border-color w-100" type="tel" name="phone_number" id="phone">
@error('phone_number')
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            <span class="fs-4">Введите ваш email:</span>
            <input class="rounded border-color w-100" type="email" name="email" id="email">
@error('email')
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            <span class="fs-4">Введите серию и номер паспорта:</span>
                            <input class="rounded border-color w-100" type="text" name="passport" id="passport">
@error('passport')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <span class="fs-4">Введите вашу дату рождения:</span>
            <input class="rounded border-color w-100" type="date" name="date" id="date">
@error('date')
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </form>
                                         <div class="mt-3">
                                            <button class="btn btn-outline-dark w-100" onclick="removeForm(this)" id="btnRemove">Удалить</button>
                                        </div>
        </div>
    </div>`;
            let container = document.querySelector('.ticket-container');
            container.insertAdjacentHTML("beforeend", template);

            ticketPrice()
            getTotalPrice()
            checkboxControls()
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

        function removeForm(target){
           target.closest('.ticketForm').remove();
            getTotalPrice()
            formCount--;
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
                    passport = item.querySelectorAll('[name="passport"]'),
                    placeContainer = item.querySelectorAll('.checkbox');
                console.log(placeContainer)
                placeContainer.forEach((item, index) => {
                    if (item.checked) {
                        placeArr.push(index + 1)
                    }
                })
                const values = {
                    name: name.value,
                    surname: surname.value,
                    email: email.value,
                    phone_number: phone_number.value,
                    passport: passport.value,
                    dateOfBirth: dateOfBirth.value.toLocaleString('en-US'),
                    place: placeArr,
                    cost: getAge(dateOfBirth.value) < 18 ? (cost * 0.9).toString() : cost,
                }
                dataArr.push(values);
            })
            console.log(dataArr);
            return dataArr
        }





        window.addEventListener('click', (e) => {
            if (e.target.classList.contains('ticketAdd')) {
                e.preventDefault();
                formCount++
                console.log(formCount)
                // let cb = document.querySelectorAll('.checkbox');
                // let checkedCount = 0;
                // cb.forEach((item) => {
                //     item.addEventListener('click', (e) => {
                //         item.checked ? checkedCount++ : checkedCount--
                //     })
                // })
                createTemplate();
            }

        });

        // window.addEventListener('click', (e) => {
        //     if (e.target.classList.contains('fakeclass')) {
        //         checkboxControls()
        //     }
        // });

        // function checkboxControls(){
        //     let cbArr = []; //Выбранные чб
        //     console.log(cbArr)
        //     const cb = document.querySelectorAll(".checkbox")
        //     cb.forEach((item) => {
        //         item.addEventListener('click', (e) => {
        //             if (cbArr.includes(item.value)) {
        //                 let index = cbArr.indexOf(item.value)
        //                 cbArr.splice(index, 1);
        //                 console.log(cbArr)
        //
        //             } else {
        //                 cbArr.push(item.value)
        //                 console.log(cbArr)
        //             }
        //             if(formCount === cbArr.length){
        //                 cb.forEach((checkbox)=>{
        //                     checkbox.setAttribute('disabled','disabled')
        //                 })
        //             }
        //
        //
        //         })
        //     });
        // }

        bookButton.addEventListener('click', (e) => {
            e.preventDefault();
            let formArr = document.querySelectorAll('.ticket-form');
            let dataForm = getFormData(formArr);
            // let totalCost

            dataForm.forEach((item, index) => {
                console.log(item)


            });
        });

        // window.addEventListener('click', (e) => {
        //     e.target.addEventListener('click', (e) => {
        //
        //     })
        // });

        function getTotalPrice(){
            const ticketPrice = document.querySelectorAll('#ticketPrice');
            const totalField = document.querySelector('#totalPrice')
            let amount = 0;
            ticketPrice.forEach((item)=>{
                let price = parseInt(item.innerHTML);
                amount += price;
            })
            totalField.innerHTML = amount;
        }

        function ticketPrice(){
            const dateInput = document.querySelectorAll('#date')
            const ticketPrice = document.querySelectorAll('#ticketPrice');
            const soloTicket = document.querySelector('#ticketPrice');
            dateInput.forEach((item,index) => {
                let cost = soloTicket.innerHTML;
                console.log('COST', cost)
                item.addEventListener('change', (e) => {
                    let age = getAge(e.target.value)
                    if(age < 18){
                        ticketPrice.forEach((ticket, ticketIndex)=>{
                            if(index === ticketIndex){
                                //Баг с созданием билетов и указанием цены после
                                let value = ticket.innerHTML;
                                ticket.innerHTML = value * 0.9
                            }
                        })
                    }
                    else{
                        ticketPrice.forEach((ticket, ticketIndex)=>{
                            if(index === ticketIndex){
                                ticket.innerHTML = cost
                            }
                        })
                    }
                    getTotalPrice()
                })
            })

        }
        ticketPrice()
    </script>

@endsection
