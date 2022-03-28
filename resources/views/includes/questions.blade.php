@section('questions')
    <section class="questions">
        <div class="container-1920">
            <div class="questions__content">
                <div class="questions__content_image">
                    <img src="img/_src/questions.jpg" alt="questions">
                </div>

                <div class="questions__content_form-block">
                    <div class="questions__content_form-block_wrapper">
                        <h3>Остались вопросы?</h3>
                        <h2>Закажите бесплатную консультацию  по проекту прямо сейчас!</h2>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('questionForm') }}" method="post">
                            @csrf
                            <div class="form-content">
                                <label>
                                    <input type="text" name="phone" placeholder="+38">
                                </label>
                                <button type="submit">Позвоните мне!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @show
    </section>

