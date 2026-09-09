<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string $nama
 * @property int $stock
 * @property int $harga
 */
class Barang extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'stock', 'harga'], 'required', 'message' => '{attribute} wajib diisi.'],
            
            // Validasi integer & minimal 0 untuk stock
            ['stock', 'integer', 'min' => 0, 'tooSmall' => 'Stok tidak boleh minus/negatif.'],
            
            // Validasi integer & minimal 100 untuk harga
            ['harga', 'integer', 'min' => 100, 'tooSmall' => 'Harga minimal harus Rp 100.'],
            
            [['nama'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'stock' => 'Stock',
            'harga' => 'Harga',
        ];
    }

}
