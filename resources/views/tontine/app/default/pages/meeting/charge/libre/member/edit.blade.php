                        <div class="input-group">
                          {!! Form::text('amount', $amount, ['class' => 'form-control', 'style' => 'width:50px;border-color:#a1a1a1;']) !!}
                          <div class="input-group-append" data-member-id="{{ $id }}">
                            <button type="button" class="btn btn-primary btn-save-bill"><i class="fa fa-save"></i></button>
                          </div>
                        </div>
