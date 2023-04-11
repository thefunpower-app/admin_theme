/**
 * @description del table menu
 * @author wangfupeng
 */
import { IButtonMenu, IDomEditor } from '@wangeditor/core';
declare class DeleteTable implements IButtonMenu {
    readonly title: string;
    readonly iconSvg = "<svg viewBox=\"0 0 1024 1024\"><path d=\"M826.8032 356.5312c-19.328 0-36.3776 15.6928-36.3776 35.0464v524.2624c0 19.328-16 34.56-35.328 34.56H264.9344c-19.328 0-35.5072-15.3088-35.5072-34.56V390.0416c0-19.328-14.1568-35.0464-33.5104-35.0464s-33.5104 15.6928-33.5104 35.0464V915.712c0 57.9328 44.6208 108.288 102.528 108.288H755.2c57.9328 0 108.0832-50.4576 108.0832-108.288V391.4752c-0.1024-19.2512-17.1264-34.944-36.48-34.944z\" p-id=\"9577\"></path><path d=\"M437.1712 775.7568V390.6048c0-19.328-14.1568-35.0464-33.5104-35.0464s-33.5104 15.616-33.5104 35.0464v385.152c0 19.328 14.1568 35.0464 33.5104 35.0464s33.5104-15.7184 33.5104-35.0464zM649.7024 775.7568V390.6048c0-19.328-17.0496-35.0464-36.3776-35.0464s-36.3776 15.616-36.3776 35.0464v385.152c0 19.328 17.0496 35.0464 36.3776 35.0464s36.3776-15.7184 36.3776-35.0464zM965.0432 217.0368h-174.6176V145.5104c0-57.9328-47.2064-101.76-104.6528-101.76h-350.976c-57.8304 0-105.3952 43.8528-105.3952 101.76v71.5264H54.784c-19.4304 0-35.0464 14.1568-35.0464 33.5104 0 19.328 15.616 33.5104 35.0464 33.5104h910.3616c19.328 0 35.0464-14.1568 35.0464-33.5104 0-19.3536-15.6928-33.5104-35.1488-33.5104z m-247.3728 0H297.3952V145.5104c0-19.328 18.2016-34.7648 37.4272-34.7648h350.976c19.1488 0 31.872 15.1296 31.872 34.7648v71.5264z\"></path></svg>";
    readonly tag = "button";
    getValue(editor: IDomEditor): string | boolean;
    isActive(editor: IDomEditor): boolean;
    isDisabled(editor: IDomEditor): boolean;
    exec(editor: IDomEditor, value: string | boolean): void;
}
export default DeleteTable;
