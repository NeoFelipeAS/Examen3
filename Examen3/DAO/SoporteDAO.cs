using System;
using Examen3.modelos;
using System.Collections.Generic;
using System.Data.SqlClient;

namespace Examen3.DAO
{
    public class SoporteDAO
    {
        private string CadenaConexion = "Data Source=ALTESEIN\\SQLEXPRESS;Initial Catalog=TiquetesDB;Integrated Security=SSPI";

        public Tiquete ObtenerTiquete(int id)
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
                                Id = (int)resultado["id"],
                                Marca = (string)resultado["marca"],
                                Ram = (string)resultado["ram"],
                                Hdd = (string)resultado["hhd"],
                                Procesador = (string)resultado["procesador"],
                                Descripcion = (string)resultado["descripción"],
                                Fecha = (DateTime)resultado["fecha"],
                                Tipo = (string)resultado["tipo"],
                                Estado = (string)resultado["estado"],
                                Cliente_id = (int)resultado["cliente_id"],
                                Taller_id = (int)resultado["taller_id"],
                                Usuario_id = (int)resultado["usuario_id"]
                            };
                        }
                    }
                }

            }
            return tiqueteEncontrado;
        }

        public List<Tiquete> ListarTiquetes()
        {
            List<Tiquete> tiquetesEncontrados = new List<Tiquete>();
            Tiquete tiqueteEncontrado = null;
            string sql = "SELECT * FROM tiquetes";
            using (SqlConnection conexion = new SqlConnection(CadenaConexion))
            {
                conexion.Open();
                using (SqlCommand comando = new SqlCommand(sql, conexion))
                {
                    using (SqlDataReader resultado = comando.ExecuteReader())
                    {
                        while (resultado.Read())
                        {
                            tiqueteEncontrado = new Tiquete()
                            {
                                Id = (int)resultado["id"],
                                Marca = (string)resultado["marca"],
                                Ram = (string)resultado["ram"],
                                Hdd = (string)resultado["hhd"],
                                Procesador = (string)resultado["procesador"],
                                Descripcion = (string)resultado["descripción"],
                                Fecha = (DateTime)resultado["fecha"],
                                Tipo = (string)resultado["tipo"],
                                Estado = (string)resultado["estado"],
                                Cliente_id = (int)resultado["cliente_id"],
                                Taller_id = (int)resultado["taller_id"],
                                Usuario_id = (int)resultado["usuario_id"]
                            };
                            tiquetesEncontrados.Add(tiqueteEncontrado);
                        }
                    }
                }
            }
            return tiquetesEncontrados;
        }

        public Tiquete CrearTiquete(Tiquete tiqueteACrear)
        {
            Tiquete tiqueteCreado = null;
            string sql = "INSERT INTO tiquetes (marca, ram, hhd, procesador, descripción, tipo, estado, cliente_id, taller_id, usuario_id) " +
                "values(@marca, @ram, @hhd, @procesador, @descripción, @tipo, @estado, @cliente_id, @taller_id, @usuario_id)";
            using (SqlConnection conexion = new SqlConnection(CadenaConexion))
            {
                conexion.Open();
                using (SqlCommand comando = new SqlCommand(sql, conexion))
                {
                    comando.Parameters.Add(new SqlParameter("@marca", tiqueteACrear.Marca));
                    comando.Parameters.Add(new SqlParameter("@ram", tiqueteACrear.Ram));
                    comando.Parameters.Add(new SqlParameter("@hhd", tiqueteACrear.Hdd));
                    comando.Parameters.Add(new SqlParameter("@procesador", tiqueteACrear.Procesador));
                    comando.Parameters.Add(new SqlParameter("@descripción", tiqueteACrear.Descripcion));
                    comando.Parameters.Add(new SqlParameter("@tipo", tiqueteACrear.Tipo));
                    comando.Parameters.Add(new SqlParameter("@estado", tiqueteACrear.Estado));
                    comando.Parameters.Add(new SqlParameter("@cliente_id", tiqueteACrear.Cliente_id));
                    comando.Parameters.Add(new SqlParameter("@taller_id", tiqueteACrear.Taller_id));
                    comando.Parameters.Add(new SqlParameter("@usuario_id", tiqueteACrear.Usuario_id));
                    comando.ExecuteNonQuery();
                }
            }
            tiqueteCreado = ObtenerTiquete(tiqueteACrear.Id);
            return tiqueteCreado;
        }

        public TiqueteNota ObtenerNota(int id)
        {
            TiqueteNota notaEncontrada = null;
            string sql = "SELECT * FROM tiquete_notas WHERE id = @id";
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
                            notaEncontrada = new TiqueteNota()
                            {
                                Id = (int)resultado["id"],
                                Fecha = (DateTime)resultado["fecha"],
                                Nota = (string)resultado["nota"],
                                Tiquete_id = (int)resultado["tiquete_id"],
                                Usuario_id = (int)resultado["usuario_id"]
                            };
                        }
                    }
                }

            }
            return notaEncontrada;
        }

        public List<TiqueteNota> ListarNotas(int id)
        {
            List<TiqueteNota> notasEncontradas = new List<TiqueteNota>();
            TiqueteNota notaEncontrada = null;
            string sql = "SELECT * FROM tiquete_notas WHERE tiquete_id = @id";
            using (SqlConnection conexion = new SqlConnection(CadenaConexion))
            {
                conexion.Open();
                using (SqlCommand comando = new SqlCommand(sql, conexion))
                {
                    comando.Parameters.Add(new SqlParameter("@id", id));
                    using (SqlDataReader resultado = comando.ExecuteReader())
                    {
                        while (resultado.Read())
                        {
                            notaEncontrada = new TiqueteNota()
                            {
                                Id = (int)resultado["id"],
                                Fecha = (DateTime)resultado["fecha"],
                                Nota = (string)resultado["nota"],
                                Tiquete_id = (int)resultado["tiquete_id"],
                                Usuario_id = (int)resultado["usuario_id"]
                            };
                            notasEncontradas.Add(notaEncontrada);
                        }
                    }
                }
            }
            return notasEncontradas;
        }

        public TiqueteNota CrearNota(TiqueteNota notaACrear)
        {
            TiqueteNota notaCreada = null;
            string sql = "INSERT INTO tiquete_notas (nota, tiquete_id, usuario_id) " +
                "values(@nota, @tiquete_id, @usuario_id)";
            using (SqlConnection conexion = new SqlConnection(CadenaConexion))
            {
                conexion.Open();
                using (SqlCommand comando = new SqlCommand(sql, conexion))
                {
                    comando.Parameters.Add(new SqlParameter("@nota", notaACrear.Nota));
                    comando.Parameters.Add(new SqlParameter("@tiquete_id", notaACrear.Tiquete_id));
                    comando.Parameters.Add(new SqlParameter("@usuario_id", notaACrear.Usuario_id));
                    comando.ExecuteNonQuery();
                }
            }
            notaCreada = ObtenerNota(notaACrear.Id);
            return notaCreada;
        }

    }
}