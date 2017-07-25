package com.n17.aizha.readydocs.data.Description;

import android.provider.BaseColumns;

/**
 * Created by aizha on 24.07.2017.
 */

public class DocsDsctnContract {

    public static final class DocsDsctnEntry implements BaseColumns {


        public static final String Description_Table_Name = "Description";
        public static final String COLUMN_Question_ID = "question_id";
        public static final String COLUMN_File_storage = "file_storage";
        public static final String COLUMN_Timest = "timestamp";


    }
}
