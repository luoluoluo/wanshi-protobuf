#!/bin/bash
root=$(cd "$(dirname "$0")"; pwd)
srcpath=$root/../protobuf
outpath=$root/src/
if [[ ! -d "$outpath" ]];then
    mkdir -p $outpath
fi
rm -rf $outpath/*
ls $srcpath
protoc -I $srcpath --php_out=$outpath --grpc_out=$outpath --plugin=protoc-gen-grpc=/opt/protobuf/bin/grpc_php_plugin $srcpath/*.proto
