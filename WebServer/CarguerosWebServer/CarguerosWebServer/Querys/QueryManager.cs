using System.Data;
using MySql.Data.MySqlClient;

using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Querys
{
    public class QueryManager
    {
        public QueryManager()
        {

        }

        //Corregir, bebe retornar tabla billing
        public DataSet getDataSetTableBilling()
        {
            MySqlConnection myConnection = new MySqlConnection("server=localhost; user id=root; password=dcanessa; database=universidad; pooling=false;");
            String strSQL = "SELECT * FROM universidad.estudiante;";
            MySqlDataAdapter myDataAdapter = new MySqlDataAdapter(strSQL, myConnection);
            DataSet myDataSet = new DataSet();
            myDataAdapter.Fill(myDataSet, "estudiante");
            return myDataSet;
        }

        //Corregir, bebe retornar tabla billing
        public DataSet getDataSetTableContainer()
        {
            MySqlConnection myConnection = new MySqlConnection("server=localhost; user id=root; password=dcanessa; database=universidad; pooling=false;");
            String strSQL = "SELECT * FROM universidad.estudiante;";
            MySqlDataAdapter myDataAdapter = new MySqlDataAdapter(strSQL, myConnection);
            DataSet myDataSet = new DataSet();
            myDataAdapter.Fill(myDataSet, "estudiante");
            return myDataSet;
        }



    }
}