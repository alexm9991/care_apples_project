
            function generarCodigo($longitud)
            {
                do {
                    $caracteres = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    $codigo = "";
                    for ($i = 0; $i < $longitud; $i++) {
                        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
                    }

                    $resultado = Pqrs::select('file_number')
                        ->where('file_number', '=', $codigo)
                        ->get();
                } while ($resultado != "[]");

                return $codigo;
            }

            $codigo = generarCodigo(10);
            $pqrs->file_number = $codigo;
            $pqrs->save();

            return redirect()->route('pqrs.create')->with('save', $codigo);
        