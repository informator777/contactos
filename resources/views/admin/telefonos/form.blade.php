    
<div class="form-group">
    <label for="ci" class="control-label">{{ 'Documento de Identidad' }}</label>
    <input   class="form-control" name="ci" type="text" id="ci" value="{{ isset($telefono->ci) ? $telefono->ci : ''}}" >
 
</div>
<div class="form-group">
    <label for="extension" class="control-label">{{ 'Extension' }}</label>
    <select name="extension" class="form-control" id="extension" >
    @foreach (json_decode('{"LP": "La Paz", "OR": "Oruro", "SCZ": "Santa Cruz",
    "PT": "Potosi","CBBA": "Cochabamba","TJ": "Tarija",
    "BE": "Beni","PA": "Pando","CH": "Chuquisaca"
    }', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($telefono->extension) && $telefono->extension == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
</div>
<div class="form-group">
    <label for="telefono_movil" class="control-label">{{ 'Teléfono Móvil' }}</label>
    <input class="form-control" name="telefono_movil" type="text" id="telefono_movil" value="{{ isset($telefono->telefono_movil) ? $telefono->telefono_movil : ''}}" >
</div>
<div class="form-group">
    <label for="telefono_fijo" class="control-label">{{ 'Teléfono Fijo' }}</label>
    <input class="form-control" name="telefono_fijo" type="text" id="telefono_fijo" value="{{ isset($telefono->telefono_fijo) ? $telefono->telefono_fijo : ''}}" >
  
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Registrar ' }}">
</div>
