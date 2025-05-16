<div class="form-row mt-2" style="display: none;">
  <div class="col-md-11">
    <a class="btn btn-light" data-toggle="collapse" id="idCollapseParticipante" href="#collapseParticipante" role="button" aria-expanded="false" aria-controls="collapseParticipante" style="width: 100%; text-align:left">
      <div class="d-flex justify-content-between align-items-center">
        <h4 id="tituloParticipante" style="color: #01487E; font-size:17px; margin-top:5px">Discente<span id="pontos" style="display: none;">:</span> <span style="display: none;" id="display"></span>  </h4>
      </div>
    </a>
  </div>
  <div class="col-1">
    <button type="button" class="btn btn-danger" id="buttonRemover" onclick="removerPart(this)" >X</button>
  </div>
  
  <div class="col-md-12">
    <div class="collapse @error('name') show @enderror" id="collapseParticipante">
      <div class="container">
          <div class="row">
            <input type="hidden"  name="funcaoParticipante[]" value="4">
            <input type="hidden" name="participante_id[]" >
            <div class="col-md-12 mt-3"><h5>Dados do discente</h5></div>
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Nome completo'])
                    <input type="text" class="form-control "   name="name[]" placeholder="Nome Completo" maxlength="150" id="nome1"  />
                    <span style="color: red; font-size: 12px" id="caracsRestantesnome1">
                    </span>
                    @error('name.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'E-mail'])
                    <input type="email" class="form-control"  name="email[]" placeholder="E-mail" />
                    @error('email.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Data de nascimento'])
                    <input type="date" class="form-control" name="data_de_nascimento[]" placeholder="Data de nascimento" />
                    @error('data_de_nascimento.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'CPF'])
                    <input type="text" class="form-control cpf"  name="cpf[]" placeholder="CPF" />
                  @endcomponent
                  @error('cpf.*')
                    <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'RG'])
                    <input type="number" class="form-control"  min="1" maxlength="12" name="rg[]" placeholder="RG" />
                    @error('rg.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Celular'])
                    <input type="text" class="form-control celular"  name="celular[]" placeholder="Celular" />
                    @error('celular.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>
            <div class="col-md-12"><h5>Endereço</h5></div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'CEP'])
                    <input type="text" class="form-control cep" name="cep[]" placeholder="CEP" />
                    @error('cep.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>           
                               
            <div class="col-6">
              @component('componentes.select', ['label' => 'Estado'])
                <select name="uf[]" id="estado" class="form-control"   style="visibility: visible" >
                  <option value=""  selected>-- Selecione uma opção --</option>
                  @foreach ($estados as $sigla => $nome)
                    <option @if(old('uf') == $sigla ) selected @endif value="{{ $sigla }}">{{ $nome }}</option>
                  @endforeach
                </select>
                @error('uf.*')
                  <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Cidade'])
                    <input type="text" class="form-control"  name="cidade[]" placeholder="Cidade" />
                    @error('cidade.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Bairro'])
                    <input type="text" class="form-control"  name="bairro[]" placeholder="Bairro" />
                    @error('bairro.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Rua'])
                    <input type="text" class="form-control"  name="rua[]" placeholder="Rua" />
                    @error('rua.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Número'])
                    <input type="text" class="form-control"  name="numero[]" placeholder="Número" />
                    @error('numero.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-12">
                  @component('componentes.input', ['label' => 'Complemento', 'obrigatorio' => ''])
                    <input type="text" class="form-control" name="complemento[]"  pattern="[A-Za-z]+" placeholder="Complemento"/>
                    @error('complemento.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>
            <div class="col-md-12"><h5>Dados do curso</h5></div>                               
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Universidade'])
                    <input type="text" class="form-control" name="universidade[]" placeholder="Universidade" />
                    @error('universidade.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Curso'])
                    <input type="text" class="form-control" name="curso[]" placeholder="Curso" />
                    @error('curso.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
              @component('componentes.select', ['label' => 'Turno'])
                <select name="turno[]" class="form-control" >
                  <option value=""  selected>-- Selecione uma opção --</option>
                  @foreach ($enum_turno as $key => $value)
                    <option @if(old('turno') == $value ) selected @endif value="{{ $value }}">{{ $value }}</option>
                  @endforeach
                </select>
                @error('turno.*')
                    <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              @endcomponent
            </div>
            @php
              $options = array('6' => 6, '7' => 7,'8' => 8,'9' => 9,'10' => 10,'11' => 11,'12' => 12); 
            @endphp                              
            <div class="col-6">
              @component('componentes.select', ['label' => 'Total de períodos do curso'])
                <select name="total_periodos[]"  class="form-control" onchange="gerarPeriodo(this)" >
                  <option value=""  selected>-- Selecione uma opção --</option>
                  @foreach ($options as $key => $value)
                    <option @if(old('total_periodos') == $key ) selected @endif value="{{ $key }}">{{ $value }}</option>
                  @endforeach
                </select>
                @error('total_periodos.*')
                    <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              @endcomponent
            </div>                              
            <div class="col-6">
              @component('componentes.select', ['label' => 'Período atual'])
                <select name="periodo_atual[]"  class="form-control"  >
                  <option value=""  selected>-- Selecione uma opção --</option>
                  
                </select>
                @error('periodo_atual.*')
                  <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.select', ['label' => 'Ordem de prioridade'])
                    <select name="ordem_prioridade[]"  class="form-control" >
                      <option value=""  selected>-- ORDEM --</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                    @error('ordem_prioridade.*')
                      <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  @endcomponent
            </div>                              
            <div class="col-6">
                  @component('componentes.input', ['label' => 'Coeficiente de rendimento (média geral)'])
                  <input type="number" class="form-control media" name="media_do_curso[]" min="0" max="10" step="0.01" oninput="validarMedia(this)">
                  @error('media_do_curso.*')
                    <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  @endcomponent
            </div>
            
            <div class="col-md-12"><h5>Plano de trabalho</h5></div>                              
              <div class="col-12">
                    @component('componentes.input', ['label' => 'Título'])
                      <input type="text" class="form-control" name="nomePlanoTrabalho[]" placeholder="Digite o título do plano de trabalho" >
                      @error('nomePlanoTrabalho.*')
                        <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    @endcomponent
              </div>                              
              <div class="col-6">
                    @component('componentes.input', ['label' => 'Anexo(.pdf)'])
                      <input type="file" class="input-group-text" name="anexoPlanoTrabalho[]" accept=".pdf" placeholder="Anexo do Plano de Trabalho" />
                      @error('anexoPlanoTrabalho.*')
                        <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      @error('anexoPlanoTrabalho')
                        <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    @endcomponent
              </div>                         
          </div>
      </div>
    </div>
  </div>
</div>

<script>
  function validarMedia(input) {
        let valor = parseFloat(input.value);
        if (valor > 10) {
            input.value = 10;
        } else if (valor < 0) {
            input.value = 0;
        }
    }
</script>