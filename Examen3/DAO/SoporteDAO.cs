using System;
using Examen3.modelos;
using System.Collections.Generic;
using System.Data.SqlClient;

namespace Examen3.DAO
{
    public class SoporteDAO
    {
        private string CadenaConexion = "Data Source=ALTESEIN\\SQLEXPRESS;Initial Catalog=TiquetesDB;Integrated Security=SSPI";

        public Tiquete Obtener(int id)
        {
            Tiquete tiqueteEncontrado = null;
            string sql = "SELECT * FROM tiquetes WHERE id = @id";
            using (SqlConnection conexion = new SqlConnection(CadenaConexion))
            {
                conexion.Open();
                using (SqlCommand comando = new SqlCommand(sql, conexion))
                {
                    comando.Parameters.Add(new SqlParameter("@id", id));
                    using (SqlDataReader resultado = comando.ExecuteReader())
                    {
                        if (resultado.Read())
                        {
                            tiqueteEncontrado = new Tiquete()
                            {
                                Id = (int)resultado["id"]
                            };
                        }
                    }
                }

            }
            return tiqueteEncontrado;
        }

        public Tiquete Crear(Tiquete tiqueteACrear)
        {
            Tiquete tiqueteCreado = null;
            string sql = "INSERT INTO tiquetes (marca) " +
                "values(@marca)";
            using (SqlConnection conexion = new SqlConnection(CadenaConexion))
            {
                conexion.Open();
                using (SqlCommand comando = new SqlCommand(sql, conexion))
                {
                    comando.Parameters.Add(new SqlParameter("@marca", tiqueteACrear.Marca));
                    comando.ExecuteNonQuery();
                }
            }
            tiqueteCreado = Obtener(tiqueteACrear.Id);
            return tiqueteCreado;
        }

    }
}