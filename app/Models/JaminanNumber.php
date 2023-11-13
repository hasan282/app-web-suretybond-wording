<?php

namespace App\Models;

use App\Models\BaseModel;

class JaminanNumber extends BaseModel
{
    private $cabang, $jenis, $konstruksi, $conditional, $proyek;
    private $issued, $register;
    private $nomor, $classname, $message;
    private $getdata;

    public function __construct(array $data = [])
    {
        parent::__construct();
        $this->cabang = null;
        $this->jenis = null;
        $this->konstruksi = null;
        $this->conditional = null;
        $this->proyek = null;
        $this->nomor = null;
        $this->classname = null;
        $this->message = null;
        $this->issued = null;
        $this->register = null;
        $this->getdata = false;
        $this->_setup($data);
    }

    public function isKonstruksi(?bool $value)
    {
        $this->konstruksi = $value;
        $this->getdata = false;
        return $this;
    }

    public function isConditional(?bool $value)
    {
        $this->conditional = $value;
        $this->getdata = false;
        return $this;
    }

    public function setCabang(?string $value)
    {
        $this->cabang = $value;
        $this->getdata = false;
        return $this;
    }

    public function setJenis(?string $value)
    {
        $this->jenis = $value;
        $this->getdata = false;
        return $this;
    }

    public function setProyek(?string $value)
    {
        if ($value !== null) {
            $proyek = array('101' => 'negara', '102' => 'swasta');
            if (array_key_exists($value, $proyek)) $this->proyek = $proyek[$value];
            $this->getdata = false;
        }
        return $this;
    }

    public function setIssueDate(?string $value)
    {
        $this->issued = $value;
        $this->getdata = false;
        return $this;
    }

    public function setRegNumber(?string $value)
    {
        $this->register = $value;
        $this->getdata = false;
        return $this;
    }

    public function setData(array $data = [])
    {
        if (!empty($data)) {
            $this->getdata = false;
            $this->_setup($data);
        }
        return $this;
    }

    public function getCabang(string $people): ?string
    {
        $this->refresh();
        $this->select = 'id_cabang';
        $this->table = 'asuransi_people';
        $this->where(['id' => $people], ['id' => 'id']);
        $result = $this->data(false);
        return $result === null ? null : $result['id_cabang'];
    }

    public function getNomor(): ?string
    {
        if ($this->_isComplete() && !$this->getdata) $this->refresh()->_getData();
        return $this->nomor;
    }

    public function getClassName(): ?string
    {
        if ($this->_isComplete() && !$this->getdata) $this->refresh()->_getData();
        return $this->classname;
    }

    public function getMessage(string $prefix = '', string $suffix = ''): ?string
    {
        if ($this->_isComplete() && !$this->getdata) $this->refresh()->_getData();
        return $this->message === null ? null : $prefix . $this->message . $suffix;
    }

    public function getVariables(): array
    {
        return array(
            'cabang' => $this->cabang,
            'jenis' => $this->jenis,
            'konstruksi' => $this->konstruksi,
            'conditional' => $this->conditional,
            'proyek' => $this->proyek,
            'issued' => $this->issued,
            'register' => $this->register,
            'nomor' => $this->nomor,
            'classname' => $this->classname,
            'message' => $this->message,
            'getdata' => $this->getdata
        );
    }

    private function _setup(array $data)
    {
        $proyek = array('101' => 'negara', '102' => 'swasta');
        if (array_key_exists('proyek', $data) && array_key_exists($data['proyek'], $proyek))
            $this->proyek = $proyek[$data['proyek']];
        if (array_key_exists('cabang', $data) && is_string($data['cabang']))
            $this->cabang = $data['cabang'];
        if (array_key_exists('jenis', $data) && is_string($data['jenis']))
            $this->jenis = $data['jenis'];
        if (array_key_exists('issued', $data) && is_string($data['issued']))
            $this->issued = $data['issued'];
        if (array_key_exists('register', $data) && is_string($data['register']))
            $this->register = $data['register'];
        if (array_key_exists('konstruksi', $data) && is_bool($data['konstruksi']))
            $this->konstruksi = $data['konstruksi'];
        if (array_key_exists('conditional', $data) && is_bool($data['conditional']))
            $this->conditional = $data['conditional'];
    }

    private function _getData()
    {
        $this->select = 'templates, registers, wording';
        $this->table = 'jaminan_number';
        $fields = array(
            'cabang' => 'id_cabang',
            'jenis' => 'id_jenis',
            'condition' => 'conditions',
            'active' => 'actives'
        );
        $this->where(array(
            'cabang' => $this->cabang,
            'jenis' => $this->jenis,
            'active' => 1
        ), $fields);
        if ($this->konstruksi !== null) $this->where(array(
            'condition' => '%konstruksi=' . ($this->konstruksi ? '1' : '0') . '%'
        ), $fields);
        if ($this->conditional !== null) $this->where(array(
            'condition' => '%conditional=' . ($this->conditional ? '1' : '0') . '%'
        ), $fields);
        if ($this->proyek !== null) $this->where(array(
            'condition' => '%proyek=' . $this->proyek . '%'
        ), $fields);
        $result = $this->data();
        if (sizeof($result) === 1) {
            $this->message = 'ditemukan classname';
            $this->classname = $result[0]['wording'];
            $this->_makeNumber($result[0]['templates'], $result[0]['registers']);
        } else {
            if (empty($result)) {
                $this->message = 'record tidak ditemukan';
            } else {
                $this->message = 'record lebih dari satu';
            }
        }
        $this->getdata = true;
    }

    private function _isComplete(): bool
    {
        return
            $this->cabang !== null &&
            $this->jenis !== null &&
            $this->konstruksi !== null &&
            $this->conditional !== null &&
            $this->proyek !== null;
    }

    private function _makeNumber(string $template, ?string $rule)
    {
        if ($this->issued !== null) {
            $date = explode('-', $this->issued);
            $replacer = array(
                'M1' => '' . intval($date[1]),
                'M2' => $date[1],
                'Y1' => substr($date[0], -2),
                'Y2' => $date[0],
                'reg' => 'DRAFT'
            );
            if ($this->register !== null) {
                $offset = null;
                $length = null;
                if ($rule !== null) {
                    $rules = explode(',', $rule);
                    foreach ($rules as $rs) {
                        if (substr($rs, 0, strlen('offset=')) == 'offset=')
                            $offset = intval(str_replace('offset=', '', $rs));
                        if (substr($rs, 0, strlen('length=')) == 'length=')
                            $length = intval(str_replace('length=', '', $rs));
                    }
                }
                if ($offset === null) {
                    $replacer = $this->register;
                } else {
                    $replacer['reg'] = substr($this->register, $offset, $length);
                }
            }
            $this->nomor = str_replace(array_map(function ($val) {
                return '(:' . $val . ')';
            }, array_keys($replacer)), array_values($replacer), $template);
            $this->message = $this->message . ' dan penomoran';
        }
    }
}
