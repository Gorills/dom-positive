@if(count($flats))
<?php $flat_in_line = 1; ?>
  @foreach($flats as $flat)
    @if($flat_in_line == 1)<div class="row">@endif
      <div class="col-md-3 @if($flat_in_line > 1) col-md-offset-1 @endif picker">
        <table class="table info_x">
<!--
          <tr>
            <td colspan="3" class="plan" align="center">
              <img src="{{ $flat->image }}" class="viewflat_img" data-flat-link="{{ route('flat.card', ['corps' => $flat->building, 'section' => $flat->section, 'flat' => $flat->flatnumber]) }}" border="0" />
            </td>
          </tr>
-->
          <tr>
            <td class="nowrap corps"><span class="big">{{ $flat->building }}</span> <span class="desctext">корпус</span></td>
            <td class="section" colspan="2"><span class="big">{{ $flat->section }}</span> <span class="desctext">секция</span></td>
          </tr>

          <tr>
            <td class="nowrap floor"><span class="big">{{ $flat->floor }}</span> <span class="desctext">этаж</td>
            <td class="nowrap sqm"><span class="big">{{ number_format($flat->sqm, 1, ',', '') }}</span> <span class="desctext">м<sup>2</sup></span></td>
            <td rowspan="2" class="rooms_txt room">
              @if($flat->rooms)
                <span class="big">{{ $flat->rooms }}@if($flat->rooms > 1 && $flat->rooms < 5)х@endif</span><br />комнатная квартира
              @else
                студия
              @endif
            </td>
          </tr>

          <tr>
            <td class="nowrap price" valign="middle" colspan="2">
              <span class="big">{{ number_format($flat->price, 0, '.', ' ') }}</span> <span class="desctext">руб.</span>
            </td>
          </tr>

          <tr class="orange_tone">
            <td colspan="3"><span class="viewflat" data-flat-link="{{ route('flat.card', ['corps' => $flat->building, 'section' => $flat->section, 'flat' => $flat->flatnumber]) }}"><span class="viewflat_txt">посмотреть квартиру</span> <i class="fa fa-chevron-circle-right"></i></span></td>
          </tr>
        </table> <br />
      </div>
    @if($flat_in_line == 3)</div>@endif
    <?php $flat_in_line++; if($flat_in_line == 4) $flat_in_line = 1; ?>
  @endforeach
@else
  <div class="row noresults">
    <div class="col-md-6 col-md-offset-3">
      К сожалению таких квартир нет.<br /> Попробуйте изменить условия поиска.
    </div>
  </div>
@endif

<script>
  $('.viewflat, .viewflat_img').click(function() {
    window.open($(this).attr('data-flat-link'), '_blank');

    return false;
  });
</script>
