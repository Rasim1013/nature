@extends('layouts.adminlayout')
@section('title','APPLICATION PAGE')
@section('main_content')
<form class="needs-validation" action="{{ route('applications.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Название поекта:  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="Укажитенаименование предлагаемого Вами проекта." data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<input type="text" name="app_name"  class="form-control" id="validationCustom01"  placeholder="Название поекта" value="{{ old('app_name') }}" required>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Название и тип организации:  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="Укажитеимя/название лица (лиц) или организации и правовой статус (МСП, ОГО, образовательное сообщество/научно-исследовательское учреждение, организация поддержки предпринимательской деятельности, микрофинансовое предприятие) заявителя. Пожалуйста, приложите к заявке данные о лице/организации, включая учредительную справку,информацию о миссии организации и направлении деятельности. Для дополнительной информации см.ТЗ (Техническое Задание)" data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<input type="text" name="name_org"  class="form-control text-uppercase" id="validationCustom02" placeholder="Название организации" value="{{ old('name_org') }}" >
			<input type="text" name="typ_org"  class="form-control text-uppercase mt-2" id="validationCustom02" placeholder="Тип организации" value="{{ old('typ_org') }}" >
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Основное контактное лицо дляобращения:  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="В этом разделе должны быть указаны имя, адрес, телефон и электронная почта заявителя" data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<input type="text" disabled class="form-control" id="validationCustom01" placeholder="{{Auth::user()->surname}}   {{Auth::user()->name}}">
			<input type="text" disabled class="form-control mt-2" id="validationCustom01"  placeholder="{{Auth::user()->phone}}">
			<input type="text" disabled class="form-control mt-2" id="validationCustom01"  placeholder="{{Auth::user()->email}}">
			<input type="text" name="position"  class="form-control mt-2" id="validationCustom02" placeholder="Название позиции" value="{{ old('position') }}" >
			<input type="text" name="addres"  class="form-control mt-2" id="validationCustom02" placeholder="Адрес" value="{{ old('addres') }}" >
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Партнерские организации (при наличии):  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="Заявитель может сотрудничать с другими организациями, включая НПО и общественные организации, и представить  предложение в качестве консорциума. В этом случае, подтверждающая информация о деятельности и документы должны быть предоставлены от каждого члена консорциума. В этом разделе должны быть указаны название (я) и тип (ы) организаций-партнеров." data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<input type="text" name="partner_name"  class="form-control" id="validationCustom02" placeholder="Название организации" value="{{ old('partner_name') }}" >
			<input type="text" name="partner_type"  class="form-control mt-2" id="validationCustom02" placeholder="Тип организации" value="{{ old('partner_type') }}" >
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Какую конкретную задачу будет решать ваш проект и каким образом?  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="В этом разделе должны быть указаны приоритетные направления предложенного проекта, описаны конкретные задачи, на решение которых сосредоточено предложение, и пути/механизмы их решения." data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
				<select class="form-control" name="priority_id">
            	  <option>-Приоритетное направление (пожалуйста, отметьте)-</option>
               	 @foreach($priority as $prior)
                  <option class="form-control" value="{{ $prior->id }}">{{$prior->name}} </option>
                  @endforeach
                </select>
              @error('prior')
              <span class="text-red-400" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Цели проекта и ожидаемое воздействие:  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="Этот раздел должен содержать ответы на следующие вопросы: чего бы вы хотели достичь и как вы будете измерять успех проекта? Является ли предложение всеобъемлющим и имеет большой потенциал воздействия? Какова экономическая, социальная и экологическая польза проекта? Как проект повлияет на создание рабочих мест, дохода и других возможностей, в особенности для женщин, молодежи и уязвимых групп населения? Укажите конкретный показатель реализации проекта.." data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<textarea class="form-control" id="proj_object" name="proj_object" rows="2" value="{{ old('proj_object') }}"  required></textarea>	
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Проектная деятельность и методология:  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="В этом разделе следует кратко резюмировать проект, ответив на следующие вопросы: i) Какие основные мероприятия будут проведены для реализации предлагаемого проекта? ii) Какой пд метод Вы будете использовать? iii) Если у Вас есть партнерские организации, какова их роль в реализации предлагаемого проекта? iv) Каковы основные риски проекта и как они будут смягчены? vi) Каким образом Вы будете осуществлять мониторинг прогресса проекта? vii) Как Вы обеспечите долгосрочную устойчивость проекта?" data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<textarea class="form-control" id="proj_activ" name="proj_activ" rows="2" value="{{ old('proj_activ') }}" required></textarea>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">В чем инновационность Вашего проекта?  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="_____ рассматривает инновации в самом широком смысле, включая i) новый подход, продукт,идею или услугу, которые нигде не испытывались; ii) новый для Таджикистана подход, продукт, идея илиуслуга; или iii) подход, продукт, идея или услуга, которые ранее не применялись в Таджикистане, нопредоставляют наилучшую возможную для предоставления долгосрочных решений. В этом разделепопробуйте подробно ответить наследующие вопросы: Какие элементы вашей идеи являются инновационными? Представляет ли она собой воплощение существующей идеи в новых оперативныхусловия, например, в сельских или пригородных районах и т.д.? Представляет ли это воплощениеновой идеи? Откуда возникла идея и как она развивалась?" data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<textarea class="form-control" id="inovat_proj" name="inovat_proj" rows="2" value="{{ old('inovat_proj') }}" required></textarea>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Почему Вам необходима поддержка в реализации проекта?  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="В этом разделе должны быть ответы на следующие вопросы: i) Могла бы идея настоящего проекта реализована без финансовой поддержки ____? ii) Почему Вы не смогли привлечь необходимое финансирование из других источников? iii) Мог бы проект осуществляться в ином масштабе или охватить другую целевую группу без финансирования ____?" data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<textarea class="form-control" id="support_proj" name="support_proj" rows="2" value="{{ old('support_proj') }}" required></textarea>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Финансирование со стороны других доноров:  <i class="nav-icon ion ion-ios-cog text-success" data-toggle="popover" title="В данном разделе должна быть представлена информация о любой финансовой поддержке или технической помощи, которую проект получил/будет получать от иного учреждения-донора в Таджикистане или за рубежомв ходе реализации. В случае получения какой-либо финансовой поддержки или технической помощи, необходимо предоставить подробную информацию о типе финансирования и кратко изложить его предполагаемое использование в проекте." data-content="And here's some amazing content. It's very engaging. Right?"></i></label>
			<textarea class="form-control" id="funding_donors" name="funding_donors" rows="2" value="{{ old('funding_donors') }}" required></textarea>
		</div>
	</div>
<!-- 	<div class="col-md-12 mb-3">
		<label class="form-control-label" for="photo">Load image</label>
		<input type="file" name="photo" id='photo'>
	</div> -->
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыт</button>
		<button type="submit" class="btn btn-primary">Добавит</button>
	</div>
</form>
@endsection
