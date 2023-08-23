<h2>İletişim Formu</h2>
@if(isset($name) && $name != null) <strong> İsim:    </strong>{{ $name }}  <br>@endif
@if(isset($phone) && $phone != null)<strong> Telefon: </strong>{{ $phone }} <br>@endif
@if(isset($email) && $email != null)<strong> E-Posta: </strong>{{ $email }} <br>@endif
@if(isset($gender) && $gender != null)a<strong> Cinsiyet: </strong>{{ $gender }}  <br>@endif
@if(isset($age) && $age != null)<strong> Yaş: </strong>{{ $age }}  <br>@endif
@if(isset($hours) && $hours != null)<strong> Aranacak Saat: </strong>{{ $hours }}  <br>@endif
@if(isset($communication) && $communication != null)<strong> İletişim Seçeneği: </strong>{{ $communication }}  <br>@endif

@if(isset($teethType) && $teethType != null)<strong> İstediği Diş Tipi: </strong>{{ $teethType }}  <br>@endif
@if(isset($areas) && $areas != null)<strong> Rahatsız Olduğu Bölgeler: </strong>{{ implode(', ', $areas) }}  <br>@endif
@if(isset($is_pregnant) && $is_pregnant != null)<strong> Hamilelik Geçirmiş mi: </strong>{{ $is_pregnant }}  <br>@endif
<hr>
@if(isset($formPosition) && $formPosition != null)<strong> Form Konumu:      </strong>{{ $formPosition }} <br>@endif
@if(isset($adPlatform) && $adPlatform != null)  <strong> Platform:         </strong>{{ $adPlatform }}   <br>@endif
@if(isset($campaign_type) && $campaign_type != null)  <strong> Kampanya Türü:         </strong>{{ $campaign_type }}   <br>@endif
@if(isset($adLocale) && $adLocale != null)    <strong> Reklam Konumu:    </strong>{{ $adLocale }}     <br>@endif
@if(isset($userCountry) && $userCountry != null) <strong> Kullanıcı Konumu: </strong>{{ $userCountry }}  <br>@endif
@if(isset($award) && $award != null)<strong> Ödül: </strong>{{ $award }} <br>@endif

